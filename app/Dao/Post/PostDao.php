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
		return Post::paginate(10);
	}

	public function addPost($request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
		$post->status = 1;
		$post->created_user_id = 1;
		$post->updated_user_id = 1;
		$post->deleted_user_id = 1;
        $post->save();
        return $post;
    }

	public function deleteById($id) {
        $post = Post::find($id);
        return $post->delete();
    }

	
    public function getPostById($id)
    {
        $post = Post::find($id);
        return $post;
    }

	public function updatedPostById($request, $id)
	{
	  $post = Post::find($id);
	  $post->title = $request['title'];
	  $post->description = $request['description'];
	  $post->status = '1';
	  $post->save();
	  return $post;
	}
}
