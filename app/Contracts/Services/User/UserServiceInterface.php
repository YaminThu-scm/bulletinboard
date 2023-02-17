<?php

namespace App\Contracts\Services\User;
use Illuminate\Http\Request;

/**
 * Interface for user service
 */
interface UserServiceInterface
{
/**
	 * To get user list
	 * @return array $userList list of users
	 */
	public function getUserList();

	public function getUserById($id);

	public function addUser($request);

	public function deleteById($id);

	public function updatedUserById($request,$id);

    public function changeUserPassword($request);

}
