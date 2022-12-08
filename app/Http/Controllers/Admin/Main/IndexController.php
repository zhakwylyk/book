<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index()
    {
        $data = ['data'];
        $data ['usersCount'] = user::all()->count();
        $data ['postsCount'] = Post::all()->count();
        $data ['categoriesCount'] = Category::all()->count();
        $data ['tagsCount'] = tags::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
