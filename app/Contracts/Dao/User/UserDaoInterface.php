<?php

namespace App\Contracts\Dao\User;
use Illuminate\Http\Request;

/**
 * Interface of Data Access Object for user
 */
interface UserDaoInterface
{
	/**
	 * To get user list
	 * @return array $userList list of users
	 */
	public function getUserList();

	public function getUserById($id);

	public function addUser(Request $request);

}
