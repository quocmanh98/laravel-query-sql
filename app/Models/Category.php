<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public function posts()
    {
        return $this->belongsToMany(
            Post::class, // Model muốn liên kết
            'post_categories', // Tên bảng liên kết ~ Tên bảng trung gian (pivot table) giữa hai model "Category" và "Post".,
            'category_id', // tên trường trong bảng liên kết (pivot table) mà chứa khóa ngoại để tham chiếu đến khóa chính của bảng "categories".,
            'post_id' //  tên trường trong bảng liên kết (pivot table) mà chứa khóa ngoại để tham chiếu đến khóa chính của bảng "posts"
        );
    }
}
