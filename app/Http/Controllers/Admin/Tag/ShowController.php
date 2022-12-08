<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Tags $tag)
    {
        $Tag = Tags::all();
        return view('admin.tag.show', compact('tag'));
    }
 
}
