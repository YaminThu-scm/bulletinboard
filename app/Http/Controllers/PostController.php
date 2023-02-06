<?php

namespace App\Http\Controllers;
use App\Contracts\Services\Post\PostServiceInterface;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $postInterface;

    public function __construct(PostServiceInterface $postServiceInterface)
    {
    //   $this->middleware('auth');
      $this->postInterface = $postServiceInterface;
    }

    public function showPostList()
    {   
        $postList = $this->postInterface->getPostList();
        return view('post.list', compact('postList'));
    }


}
