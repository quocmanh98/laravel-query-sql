<?php

namespace App\Models;

use App\Models\Vote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(
            Category::class,
            'post_categories',
            'post_id',
            'category_id'
        )->withPivot('created_at', 'updated_at', 'status')
        ->wherePivot('status', 1)
        ->withTimestamps();
    }

    public function comments()
    {
        return $this->hasMany(
            Comment::class,
            'post_id',
            'id'
        );
    }

    public function votes()
    {
        return $this->hasMany(
            Vote::class,
            'post_id',
            'id'
        );
    }
}
