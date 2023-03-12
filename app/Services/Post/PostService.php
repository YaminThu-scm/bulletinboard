<?php

namespace App\Services\Post;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Contracts\Dao\Post\PostDaoInterface;
use App\Contracts\Services\Post\PostServiceInterface;

/**
 * Service class for post.
 */
class PostService implements PostServiceInterface
{
    /**
     * post dao
     */
    private $postDao;
    /**
     * Class Constructor
     * @param PostDaoInterface
     * @return
     */
    public function __construct(PostDaoInterface $postDao)
    {
        $this->postDao = $postDao;
    }

    public function getPostListAll()
    {
        return $this->postDao->getPostListAll();
    }

    public function getPostList()
    {
        return $this->postDao->getPostList();
    }

    public function addPost($request)
    {
        return $this->postDao->addPost($request);
    }

    public function deleteById($id)
    {
        return $this->postDao->deleteById($id);
    }

    public function getPostById($id)
    {
        return $this->postDao->getPostById($id);
    }

    public function updatedPostById($request, $id)
    {
        return $this->postDao->updatedPostById($request, $id);
    }

    public function downloadPostCSV()
    {
        if (Auth::user()->type == '0') {
            $postList = $this->postDao->getPostListAllDownload();
        } else {
            $postList = $this->postDao->getPostListDownload();
        }
        $filename = "posts.csv";
        //write csv file
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array('Post Title', 'Post Description', 'Status', 'Posted User', 'Posted Date'));
        foreach ($postList as $post) {
            $row['Title']  = $post->title;
            $row['Description']    = $post->description;
            if ($post->status == 1) {
                $row['Status'] = 'Active';
            } else {
                $row['Status'] = 'Draft';
            }
            if (isset($post->user) && isset($post->user->name)) {
                $row['PostedUser'] =  $post->user->name;
            } else {
                "UNKNOWN USER";
            }
            $row['PostedDate'] =  date_format_change($post->created_at);
            fputcsv($handle, array($row['Title'], $row['Description'], $row['Status'], $row['PostedUser'], $row['PostedDate']));
        }
        fclose($handle);
        $headers = array(
            'Content-Type' => 'text/csv',
        );
        return response()
            ->download($filename, $filename, $headers)
            ->deleteFileAfterSend();
    }

    public function uploadPostCSV($validated, $uploadedUserId)
    {
      $fileName = $validated['upload-file']->getClientOriginalName();
      Storage::putFileAs(config('path.csv') . $uploadedUserId .
        config('path.separator'), $validated['upload-file'], $fileName);
      return $this->postDao->uploadPostCSV($validated, $uploadedUserId);
    }
}
