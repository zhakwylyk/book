<?php

namespace App\Http\Controllers\Personal\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class DeleteController extends Controller
{
    public function index(Category $category)
    {
        $category->delete();
        return redirect()->route('personal.category.index');
    }

}
