<?php

namespace App\Contracts\Dao\Post;
use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Post
 */
interface PostDaoInterface
{
	
	public function getPostList();

	public function addPost(Request $request);

	public function deleteById($id);

	public function getPostById($id);

	public function updatedPostById($request,$id);

}
