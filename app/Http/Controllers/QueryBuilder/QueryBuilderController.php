<?php

namespace App\Http\Controllers\QueryBuilder;

use App\Models\Post;
use App\Models\User;
use App\Models\Group;
use App\Models\Phone;
use App\Models\Users;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Category;
use App\Models\Mechanic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QueryBuilderController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->user = new Users;
    }

    public function showData($data)
    {
        echo '<pre>';
        printf($data);
        echo '</pre>';
    }
    public function index()
    {
        $posts = Post::find(1);
        $comment = $posts->comments()->saveMany([
            new Comment(['content' => 'Quốc Mạnh',
            'name'=>'Name 1']),
            new Comment(['content' => 'Another comment', 'name'
            => 'Name 2']),
            ]);


        $comments = $posts->comments;

        foreach ($comments as $v) {
            echo $v . "<br>";
        }
        // dd($comments);
    }
}
