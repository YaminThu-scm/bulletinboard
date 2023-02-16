<?php

namespace App\Imports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToModel;

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
            'status'=> $row[2],
            'created_user_id'=> $row[3],
            'updated_user_id'=> $row[4],
            'deleted_user_id'=> $row[5],
        ]);
    }
}
