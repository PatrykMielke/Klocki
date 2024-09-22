<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected function user()
    {
        return $this->belongsTo(User::class);
    }

    public function publishedPosts($query)
    {
        return $query->where('published', true);
    }

    protected $fillable = [
        'title',
        'snippet',
        'body',
        'image',
        'user_id',
        'is_published',
    ];

    protected $table = 'posts';
    protected $primaryKey = 'id';
}
