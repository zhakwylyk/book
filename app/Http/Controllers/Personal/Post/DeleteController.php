<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class DeleteController extends Controller
{
    public function index(Post $post)
    {
        auth()->user()->UserPost()->detach($post->id);

        return redirect()->route('personal.post.index');
    }

}
