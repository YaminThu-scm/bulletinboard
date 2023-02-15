<?php

namespace App\Dao\User;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Contracts\Dao\User\UserDaoInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
            ->when(request('searchName'), function ($query) {
                $query->where('user.name', 'Like', '%' . request('searchName') . '%');
            })->when(request('searchEmail'), function ($query) {
                $query->where('user.email', 'Like', '%' . request('searchEmail') . '%');
            })->when(request('searchCreatedFrom'), function ($query) {
                $query->where('user.created_at', 'Like', '%' . request('searchCreatedFrom') . '%');
            })->when(request('searchCreatedTo'), function ($query) {
                $query->where('user.updated_at', 'Like', '%' . request('searchCreatedTo') . '%');
            })
            ->join('users as created_user', 'user.created_user_id', '=', 'created_user.id')
            ->join('users as updated_user', 'user.updated_user_id', '=', 'updated_user.id')
            ->select('user.*', 'created_user.name as created_user', 'updated_user.name as updated_user')
            ->orderBy('created_at', 'DESC')->paginate(config('data.pagination'));
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
        $user->created_user_id = Auth::user()->id;
        $user->updated_user_id = Auth::user()->id;
        $user->type = $request->type;
        $user->phone = $request->phno;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->profile = $request->profile;
        $user->save();
        return $user;
    }


    public function deleteById($id)
    {
        $user = User::find($id);
        return $user->delete();
    }

    public function updatedUserById($request, $id)
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
