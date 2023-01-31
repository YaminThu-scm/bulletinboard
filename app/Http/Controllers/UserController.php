<?php

namespace App\Http\Controllers;
use App\Contracts\Services\User\UserServiceInterface;

class UserController extends Controller
{

    private $userInterface;

    public function __construct(UserServiceInterface $userServiceInterface)
    {
    //   $this->middleware('auth');
      $this->userInterface = $userServiceInterface;
    }

    public function showUserList()
    {   
        $userList = $this->userInterface->getUserList();
        return view('user.list', compact('userList'));
    }

    public function showUser($id)
    {   
        $user = $this->userInterface->getUserById($id);
        return view('user.profile', compact('user'));
    }

    public function createUser()
    {   
        return view('user.create');
    }

}
