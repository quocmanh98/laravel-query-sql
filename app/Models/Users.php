<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';

    public function myPhone()
    {
        return $this->hasOne(Phone::class, 'user_id', 'id')
            ->withDefault(function($phone){
                $phone->phone = '09611*****';
            });
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

}
