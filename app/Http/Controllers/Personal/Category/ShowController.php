<?php

namespace App\Http\Controllers\Personal\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Category $category)
    {
        $categories = Category::all();
        return view('personal.categories.show', compact('category'));
    }

}
