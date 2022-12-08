<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tags;

class EditController extends Controller
{
    public function index(Post $post)
    {
        $categories = Category::all();
        $tag = Tags::all();
        return view('personal.post.edit', compact('post', 'categories', 'tag'));
    }

}
