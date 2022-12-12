<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index()
    {
        $likedPosts = Post::withCount('liked')->orderBy('liked_count', 'DESC')->get()->take(5);
        return view('personal.main.index',compact('likedPosts'));
    }
}

