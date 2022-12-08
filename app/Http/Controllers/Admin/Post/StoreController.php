<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function index(StoreRequest $request){
        $data = $request->validated();
        $tagsIds = $data ['tag_ids'];
        unset($data ['tag_ids']);
        $data ['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        $post = Post::firstOrCreate($data);
        $post->tags()->attach($tagsIds);
        return redirect()->route('admin.post.index');


    }
}


//Путь папка изображение
