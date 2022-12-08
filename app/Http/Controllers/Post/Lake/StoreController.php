<?php

namespace App\Http\Controllers\Post\Lake;

use App\Http\Controllers\Controller;

use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;
use App\Models\PostUserLake;
use App\Models\User;

class StoreController extends Controller
{
    public function index(Post $post )
    {
        auth()->user()->LikedPost()->toggle($post->id);

        return redirect()->back();

    }
}
