<?php

namespace App\Http\Controllers\Personal\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);
        return view('personal.categories.show', compact('category'));
    }

}
