<?php

namespace App\Dao\User;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Contracts\Dao\User\UserDaoInterface;
use Illuminate\Support\Facades\Hash;

/**
 * Data Access Object for User
 */
class UserDao implements UserDaoInterface
{
    /**
     * To get user list
     * @return array $userList list of users
     */
    public function getUserList()
    {
     
        $userList = DB::table('users as user')->orderBy('created_at', 'DESC')
        ->join('users as created_user', 'user.created_user_id', '=', 'created_user.id')
        ->join('users as updated_user', 'user.updated_user_id', '=', 'updated_user.id')
        ->select('user.*', 'created_user.name as created_user', 'updated_user.name as updated_user')
        ->paginate(5);
      return $userList;
    }


    public function getUserById($id)
    {
        $user = User::findOrFail($id);
        return $user;
    }

    public function addUser($request)
    {

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->created_user_id = 1;
        $user->updated_user_id = 1;
        $user->deleted_user_id = 1;
        $user->type = $request->type;
        $user->phone = $request->phno;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->profile = $request->profile;
        $user->save();
        return $user;
    }

    
	public function deleteById($id) {
        $user = User::find($id);
        return $user->delete();
    }

    public function updatedUserById($request,$id)
	{
		
	  $user = User::find($id);
	  $user->name = $request['name'];
	  $user->email = $request['email'];
	  $user->type = $request['type'];
	  $user->phone = $request['phone'];
	  $user->address = $request['address'];
	  $user->dob = $request['dob'];
	  $user->profile = $request['profile'];
	  $user->update();
	  return $user;
	}
}
