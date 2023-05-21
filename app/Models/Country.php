<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'country';

    public function posts()
    {
        return $this->hasManyThrough(
            Post::class, // Model muốn liên kết
            User::class, // Model trung gian
            'country_id', // Khóa ngoại của model trung gian
            'user_id', // Khóa ngoại của model muốn liên kết
            'id', // Khóa chính của Model hiện tại
            'id' // Khóa chính của Model trung gian
        );
    }
}
