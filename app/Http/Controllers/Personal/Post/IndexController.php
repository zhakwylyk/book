<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = auth()->user()->UserPost;
        return view('personal.post.index', compact('posts'));
    }

}
