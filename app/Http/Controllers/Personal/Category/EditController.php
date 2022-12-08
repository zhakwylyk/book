<?php

namespace App\Http\Controllers\Personal\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class EditController extends Controller
{
    public function index(Category $category)
    {
        return view('personal.categories.edit', compact('category'));
    }

}
