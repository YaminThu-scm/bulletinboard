<?php

namespace App\Services\Post;

use App\Contracts\Dao\Post\PostDaoInterface;
use App\Contracts\Services\Post\PostServiceInterface;

/**
 * Service class for post.
 */
class PostService implements PostServiceInterface
{
  /**
   * post dao
   */
  private $postDao;
  /**
   * Class Constructor
   * @param PostDaoInterface
   * @return
   */
  public function __construct(PostDaoInterface $postDao)
  {
    $this->postDao = $postDao;
  }

  public function getPostList()
  {
    return $this->postDao->getPostList();
  }

}
