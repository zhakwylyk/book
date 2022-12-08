<?php

namespace App\Http\Controllers\Personal\Comment;
use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;


class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();
        $comment->update($data);
        return redirect()->route('personal.comment.index');
    }
}
