<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Exports\ExportPosts;
use App\Imports\ImportPosts;
use Illuminate\Http\Request;
use App\Enums\PostStatusEnum;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\PostEditRequest;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUploadRequest;
use App\Contracts\Services\Post\PostServiceInterface;

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
        if (Auth::user()->type == '0') {
            $postList = $this->postInterface->getPostListAll();
            return view('post.list', compact('postList'));
        } else {
            $postList = $this->postInterface->getPostList();
            return view('post.list', compact('postList'));
        }
    }

    public function createPost()
    {
        return view('post.create');
    }

    public function savePost(PostCreateRequest $request)
    {
        $request->validated();
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

    public function submitPostEditView(PostEditRequest $request, $id)
    {
        $request->validated();
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
        return $this->postInterface->downloadPostCSV();
    }

    public function showPostUploadView()
    {
        return view('post.upload_file');
    }

    public function submitPostUploadView(PostUploadRequest $request)
    {
        // $request->validate([
        //     'upload-file' => 'required|file|max:2048|mimes:csv'
        // ]);
        // Excel::import(new ImportPosts, request()->file('upload-file'));
        // return redirect()->route('post.list');
        $validated = $request->validated();
        $uploadedUserId = Auth::user()->id;
        $content = $this->postInterface->uploadPostCSV($validated, $uploadedUserId);
        if (!$content['isUploaded']) {
            return redirect('/post/upload')->with('error', $content['message']);
        } else {
          return redirect()->route('post.list');
        }
    }
}
