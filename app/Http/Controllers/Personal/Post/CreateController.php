<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tags;
use App\Models\Post;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        $tag = Tags::all();

        return view('personal.post.create', compact('categories', 'tag'));
    }

}
