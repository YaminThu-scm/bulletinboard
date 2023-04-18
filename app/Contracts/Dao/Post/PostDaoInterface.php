<?php

namespace App\Contracts\Dao\Post;
use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of Post
 */
interface PostDaoInterface
{
	public function getPostListAll();

	public function getPostList();

    public function getPostListAllDownload();

	public function getPostListDownload();

	public function addPost(Request $request);

	public function deleteById($id);

	public function getPostById($id);

	public function updatedPostById($request,$id);

    public function uploadPostCSV($validated, $uploadedUserId);

}
