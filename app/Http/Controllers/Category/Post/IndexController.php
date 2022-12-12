<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{

    public function index(Category $category){
        $categories = Category::all();
        $posts = $category->posts()->paginate(4);
        $settings = Settings::all();
        return view('category.post.index', compact('posts', 'category','categories','settings'));

    }






}
