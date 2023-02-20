<?php

namespace App\Http\Controllers;

use App\Contracts\Services\User\UserServiceInterface;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\Failed;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

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
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8|regex:/^(?=.*[A-Z])(?=.*\d)/',
            'type' => 'required',
            'profile' => 'required|mimes:jpg,jpeg,png',
            'phno' => 'min:9|max:20'
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
            'name' => 'required|string',
            'type' => 'required',
            'phno' => 'min:9|max:20',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($id),
            ],
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
        $this->userInterface->updatedUserById($request, intval($id));
        return redirect()->route('user.list');
    }

    public function changePassword()
    {
        return view('user.change_password');
    }

    public function savePassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error", "Your current password does not matches with the password.");
        }
        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            // Current password and new password same
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
        $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);
        $this->userInterface->changeUserPassword($request);
        return redirect()->route('post.list')->with("success", "Password successfully changed!");
    }
}
