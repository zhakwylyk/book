<?php

namespace App\Http\Controllers\Personal\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index()
    {
        return view('personal.categories.create');
    }

}
