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
    public function getPostListAll($searchKey = null)
    {
        $searchKey = $searchKey ?? request('searchKey');
        $postList =  Post::where(function ($query) use ($searchKey) {
            $query->whereHas('user', function ($query) use ($searchKey) {
                $query->where('name', 'like', '%' . $searchKey . '%');
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
        $postList =  Post::where('created_user_id', Auth::user()->id)
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

    public function getPostListAllDownload()
    {
        $searchKey = request('searchKey');
        $postList =  Post::where(function ($query) use ($searchKey) {
            $query->whereHas('user', function ($query) use ($searchKey) {
                $query->where('name', 'like', '%' . $searchKey . '%');
            });
            $query->orwhere('title', 'LIKE', '%' . $searchKey . '%')
                ->orWhere('description', 'LIKE', '%' . $searchKey . '%');
        })
            ->orderBy('created_at', 'DESC')->get();
        return $postList;
    }

    public function getPostListDownload()
    {
        $searchKey = request('searchKey');
        $postList =  Post::where('created_user_id', Auth::user()->id)
            ->where(function ($query) use ($searchKey) {
                $query->whereHas('user', function ($query) {
                    $query->where('name', 'like', '%' . request('searchKey') . '%');
                });
                $query->orwhere('title', 'LIKE', '%' . $searchKey . '%')
                    ->orWhere('description', 'LIKE', '%' . $searchKey . '%');
            })
            ->orderBy('created_at', 'DESC')->get();
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
        $post = Post::findOrFail($id);
        $post->deleted_user_id = Auth::user()->id;
        $post->save();
        $post->delete();
    }

    public function getPostById($postId)
    {
        $post = Post::findOrFail($postId);
        return $post;
    }

    public function updatedPostById($request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request['title'];
        $post->description = $request['description'];
        if ($request['status']) {
            $post->status = PostStatusEnum::Active;
        } else {
            $post->status = PostStatusEnum::Draft;
        }
        $post->updated_user_id = Auth::user()->id;
        $post->update();
        return $post;
    }

    public function uploadPostCSV($validated, $uploadedUserId)
    {
      $path =  $validated['upload-file']->getRealPath();
      $csv_data = array_map('str_getcsv', file($path));
      // save post to Database accoding to csv row
      foreach ($csv_data as $index => $row) {
        if (count($row) >= 2) {
          try {
            $post = new Post();
            $post->title = $row[0];
            $post->description = $row[1];
            $post->created_user_id = $uploadedUserId ?? 1;
            $post->updated_user_id = $uploadedUserId ?? 1;
            $post->save();
          } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
            //error handling for duplicated post
            if ($errorCode == '1062') {
              $content = array(
                'isUploaded' => false,
                'message' => 'Row number (' . ($index + 1) . ') is duplicated title.'
              );
              return $content;
            }
          }
        } else {
          // error handling for invalid row.
          $content = array(
            'isUploaded' => false,
            'message' => 'Row number (' . ($index + 1) . ') is invalid format.'
          );
          return $content;
        }
      }
      $content = array(
        'isUploaded' => true,
        'message' => 'Uploaded Successfully!'
      );
      return $content;
    }
}
