<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tags;

class DeleteController extends Controller
{
    public function index(Tags $tag)
    {
        $tag->delete();
        return redirect()->route('admin.tag.index');
    }

}
