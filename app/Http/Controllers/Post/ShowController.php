<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tags;

class ShowController extends Controller
{

    public function index(Post $post){


        $settings = Settings::all();
        $categories = Category::all();
        $tags = tags::all();
        $likedPosts = Post::withCount('liked')->orderBy('liked_count', 'DESC')->get()->take(4);
        return view('post.show', compact('post', 'settings','categories','likedPosts','tags'));

    }


}
