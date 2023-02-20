<?php

namespace App\Exports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\Auth;

class ExportPosts implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if (Auth::user()->type == '0') {
            return Post::all();
        } else {
            return Post::where('created_user_id', Auth::user()->id)->get();
        }
    }
}
