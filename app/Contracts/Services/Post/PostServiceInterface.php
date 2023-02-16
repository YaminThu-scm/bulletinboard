<?php

namespace App\Contracts\Services\Post;

/**
 * Interface for post service
 */
interface PostServiceInterface
{
	public function getPostListAll();

    public function getPostList();

	public function addPost($request);

	public function deleteById($id);

	public function getPostById($id);

	public function updatedPostById($request,$id);
}
