<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class DeleteController extends Controller
{
    public function index(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.index');
    }

}
