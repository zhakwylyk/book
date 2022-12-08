<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{

    public function index(){

        $posts = Post::paginate(8);
        $categories = Category::all();
        $settings = Settings::all();
        $likedPosts = Post::withCount('liked')->orderBy('liked_count', 'DESC')->get()->take(5);
        return view('post.index', compact('posts','likedPosts', 'settings', 'categories'));

    }


}
