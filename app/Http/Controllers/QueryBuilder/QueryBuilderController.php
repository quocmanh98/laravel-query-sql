<?php

namespace App\Http\Controllers\QueryBuilder;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class QueryBuilderController extends Controller
{
    protected $user;
    public function __construct()
    {
        $this->user = new Users;
    }
    public function index()
    {
        $this->user->learnQueryBuilder();
    }
}
