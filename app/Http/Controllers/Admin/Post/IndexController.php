<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(8);
        return view('admin.post.index', compact('posts'));
    }

}
