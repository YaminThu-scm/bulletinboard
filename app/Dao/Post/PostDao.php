<?php

namespace App\Dao\Post;
use App\Models\Post;
use App\Contracts\Dao\Post\PostDaoInterface;
/**
 * Data accessing object for post
 */
class PostDao implements PostDaoInterface
{
	public function getPostList()
	{	
		$postList = Post::join('users', 'posts.created_user_id', '=', 'users.id')
		->select('posts.*', 'users.name')
		->get();
		return $postList;
	}
}
