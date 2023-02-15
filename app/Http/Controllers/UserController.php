<?php

namespace App\Http\Controllers;

use App\Contracts\Services\User\UserServiceInterface;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\Failed;
use Illuminate\Support\Facades\Hash;

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

    public function saveUser(Request $request)
    {
        if ($request->hasFile('profile')) {
            $fileName = uniqid() . $request->file('profile')->getClientOriginalName();
            $request->file('profile')->storeAs('public', $fileName);
            $request['profile'] = $fileName;
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|confirmed|min:6',
            'profile' => 'mimes:jpg,jpeg,png'
        ]);
        return redirect()->route('user.create.confirm')->withInput();
    }

    public function confirmCreateUser()
    {
        if (old()) {
            return view('user.create_confirm');
        }
        return redirect()->route('user.list');
    }

    public function submitConfirmCreateUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $this->userInterface->addUser($request);
        return redirect()->route('user.list');
    }

    public function deleteUser($id)
    {
        $this->userInterface->deleteById($id);
        return redirect()->route('user.list');
    }

    public function showUserEdit($id)
    {
        $user = $this->userInterface->getUserById($id);
        return view('user.edit', compact('user'));
    }

    public function submitUserEditView(Request $request, $id)
    {
        if ($request->hasFile('profile')) {
            $fileName = uniqid() . $request->file('profile')->getClientOriginalName();
            $request->file('profile')->storeAs('public', $fileName);
            $request['profile'] = $fileName;
        }

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'type' => 'required',
        ]);

        return redirect()->route('user.confirm', [$id])->withInput();
    }


    public function showUserEditConfirmView($id)
    {
        if (old()) {
            return view('user.edit_confirm');
        }
        return redirect()->route('user.list');
    }

    public function submitUserEditConfirmView(Request $request, $id)
    {
        $user = $this->userInterface->updatedUserById($request, intval($id));
        return redirect()->route('user.list');
    }
}
