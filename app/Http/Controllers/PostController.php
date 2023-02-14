<?php

namespace App\Http\Controllers;

use App\Contracts\Services\Post\PostServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Post;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportPosts;
use App\Imports\ImportPosts;

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

  public function createPost()
  {
    return view('post.create');
  }

  public function savePost(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'description' => 'required',
    ]);
    return redirect()->route('post.create.confirm')->withInput();
  }

  public function confirmCreatePost()
  {
    if (old()) {
      return view('post.create_confirm');
    }
    return redirect()->route('post.list');
  }

  public function submitConfirmCreatePost(Request $request)
  {
    $request->validate([
      'title' => 'required',
      'description' => 'required',
    ]);
    $this->postInterface->addPost($request);
    return redirect()->route('post.list');
  }


  public function deletePost($id)
  {
    $this->postInterface->deleteById($id);
    return redirect()->route('post.list');
  }

  public function showPostEdit($id)
  {
    $post = $this->postInterface->getPostById($id);
    return view('post.edit', compact('post'));
  }

  public function submitPostEditView(Request $request, $id)
  {
    $request->validate([
      'title' => 'required',
      'description' => 'required',
    ]);
    return redirect()->route('post.confirm', [$id])->withInput();
  }


  public function showPostEditConfirmView($id)
  {
    if (old()) {
      return view('post.edit_confirm');
    }
    return redirect()->route('post.list');
  }

  public function submitPostEditConfirmView(Request $request, $id)
  {
    $this->postInterface->updatedPostById($request, intval($id));
    return redirect()->route('post.list');
  }

  public function downloadPostCSV()
  {
    return Excel::download(new ExportPosts, 'posts.csv');
  }

  public function showPostUploadView() {
    return view('post.upload_file');
  }

  public function submitPostUploadView(Request $request)
  {
    Excel::import(new ImportPosts, request()->file('upload-file'));
    return redirect()->route('post.list');
  }
}
