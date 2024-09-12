<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'snippet',
        'body',
        'path_to_image'
    ];

    protected $table = 'posts';
    protected $primaryKey = 'id';
}
