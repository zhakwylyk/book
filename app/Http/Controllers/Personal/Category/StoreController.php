<?php

namespace App\Http\Controllers\Personal\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(StoreRequest $request){

     $data = $request->validated();
     Category::firstOrCreate($data);

     return redirect()->route('personal.category.index');


    }
}
