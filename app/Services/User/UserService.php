<?php

namespace App\Services\User;

use App\Contracts\Dao\User\UserDaoInterface;
use App\Contracts\Services\User\UserServiceInterface;
use Illuminate\Http\Request;

/**
 * User Service class
 */
class UserService implements UserServiceInterface
{
  /**
   * user Dao
   */
  private $userDao;

  /**
   * Class Constructor
   * @param UserDaoInterface
   * @return
   */
  public function __construct(UserDaoInterface $userDao)
  {
    $this->userDao = $userDao;
  }

  /**
   * To get user list
   * @return array $userList list of users
   */
  public function getUserList()
  {
    return $this->userDao->getUserList();
  }

  public function getUserById($id){
    return $this->userDao->getUserById($id);
  }

  public function addUser(Request $request)
  {
    return $this->userDao->addUser($request);
  }
}
