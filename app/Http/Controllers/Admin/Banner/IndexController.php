<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\ads;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $ads = ads::all();
        return view('admin.banner.index', compact('ads'));
    }

}
