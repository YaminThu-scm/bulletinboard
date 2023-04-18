<?php

namespace App\Imports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Auth;

class ImportPosts implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Post([
            'title'     => $row[0],
            'description'=> $row[1],
            'created_user_id'=> Auth::user()->id,
            'updated_user_id'=> Auth::user()->id,
        ]);
    }
}
