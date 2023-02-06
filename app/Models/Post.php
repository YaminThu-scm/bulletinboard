<?php

namespace App\Models;

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $fillable = [
        'title',
        'description',
        'status',
        'created_user_id',
        'updated_user_id',
        'deleted_user_id',
        'created_at',
        'updated_at',
        'deleted_at' 
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'created_user_id', 'id');
    }
}
