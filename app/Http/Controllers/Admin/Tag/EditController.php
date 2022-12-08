<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tags;

class EditController extends Controller
{
    public function index(Tags $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }

}
