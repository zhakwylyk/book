<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $tag = Tags::all();
        return view('admin.tag.index', compact('tag'));
    }
 
}
