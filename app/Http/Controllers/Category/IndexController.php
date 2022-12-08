<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends Controller
{

    public function index(){
        $categories = Category::all();
   return view ('category.index', compact('categories'));

    }


}
