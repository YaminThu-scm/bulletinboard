<?php

namespace App\Dao\Post;

use App\Models\Post;
use App\Contracts\Dao\Post\PostDaoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Enums\PostStatusEnum;

/**
 * Data accessing object for post
 */
class PostDao implements PostDaoInterface
{
    public function getPostListAll()
    {
        $searchKey = request('searchKey');
        $postList =  Post::select("*")
            ->where(function ($query) use ($searchKey) {
                $query->whereHas('user', function ($query) {
                    $query->where('name', 'like', '%' . request('searchKey') . '%');
                });
                $query->orwhere('title', 'LIKE', '%' . $searchKey . '%')
                    ->orWhere('description', 'LIKE', '%' . $searchKey . '%');
            })
            ->orderBy('created_at', 'DESC')->paginate(config('data.pagination'));
        return $postList;
    }

    public function getPostList()
    {
        $searchKey = request('searchKey');
        $postList =  Post::select("*")
            ->where('created_user_id', Auth::user()->id)
            ->where(function ($query) use ($searchKey) {
                $query->whereHas('user', function ($query) {
                    $query->where('name', 'like', '%' . request('searchKey') . '%');
                });
                $query->orwhere('title', 'LIKE', '%' . $searchKey . '%')
                    ->orWhere('description', 'LIKE', '%' . $searchKey . '%');
            })
            ->orderBy('created_at', 'DESC')->paginate(config('data.pagination'));
        return $postList;
    }

    public function addPost($request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->status = PostStatusEnum::Active;
        $post->created_user_id = Auth::user()->id;
        $post->updated_user_id = Auth::user()->id;
        $post->save();
        return $post;
    }

    public function deleteById($id)
    {
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
        if ($request['status']) {
            $post->status = PostStatusEnum::Active;
        } else {
            $post->status = PostStatusEnum::Draft;
        }
        $post->update();
        return $post;
    }
}
