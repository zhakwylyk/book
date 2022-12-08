<?php

namespace App\Http\Controllers\Admin\Post;

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
        return view('admin.post.edit', compact('post', 'categories', 'tag'));
    }

}
