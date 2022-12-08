<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function index(Post $post)
    {
        auth()->user()->likedPost()->detach($post->id);
//        dd($posts);
        return redirect()->route('personal.liked.index');
    }

}
