<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'preview',
        'img'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at');
    }
}
