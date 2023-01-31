<?php

namespace App\Dao\User;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Contracts\Dao\User\UserDaoInterface;

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
     

        $userList = DB::table('users as user')
        ->join('users as created_user', 'user.created_user_id', '=', 'created_user.id')
        ->join('users as updated_user', 'user.updated_user_id', '=', 'updated_user.id')
        ->select('user.*', 'created_user.name as created_user', 'updated_user.name as updated_user')
        ->get();
      return $userList;
    }


    public function getUserById($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function addUser(Request $request)
    {

        $validator = validator(request()->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'type' => 'required',
            'phone' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'profile' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        // $user->confirmpassword = $request->confirmpassword;
        $user->type = $request->type;
        $user->phone = $request->phno;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->profile = $request->profile;
        $user->save();
        return $user;
    }
}
