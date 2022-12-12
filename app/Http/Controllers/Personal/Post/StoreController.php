<?php

namespace App\Http\Controllers\Personal\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function index(Post $post, StoreRequest $request){
        $data = $request->validated();

        $data ['user_id'] = auth()->user()->id;

        $posts ['post_id'] = $post->id;
        $tagsIds = $data ['tag_ids'];
        unset($data ['tag_ids']);
        $data ['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        $post = Post::firstOrCreate($data);
        $post->tags()->attach($tagsIds);


        return redirect()->route('personal.post.index',compact('posts'));





    }
}


//Путь папка изображение
