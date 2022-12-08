<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tags;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $tag = Tags::all();
        return view('admin.post.create', compact('categories', 'tag'));
    }

}
