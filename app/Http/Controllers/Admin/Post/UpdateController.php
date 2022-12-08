<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $tagsIds = $data ['tag_ids'];
        unset($data ['tag_ids']);
        if (isset($data['preview_image'])){
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }
        $post->update($data);
        $post->tags()->sync($tagsIds);
        return view('admin.post.show', compact('post'));
    }

}
