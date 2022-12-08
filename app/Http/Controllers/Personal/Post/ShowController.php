<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Post $post)
    {
        $post = Post::all();
        return view('personal.post.show', compact('post'));
    }

}
