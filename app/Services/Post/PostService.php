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

    public function getPostListAll()
    {
        return $this->postDao->getPostListAll();
    }

    public function getPostList()
    {
        return $this->postDao->getPostList();
    }

    public function addPost($request)
    {
        return $this->postDao->addPost($request);
    }

    public function deleteById($id)
    {
        return $this->postDao->deleteById($id);
    }

    public function getPostById($id)
    {
        return $this->postDao->getPostById($id);
    }

    public function updatedPostById($request, $id)
    {
        return $this->postDao->updatedPostById($request, $id);
    }
}
