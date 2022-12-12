<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;

use App\Models\ads;
use App\Models\Settings;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(ads $ads)
    {
        $ad = ads::all();
        return view('admin.banner.show', compact('ads'));
    }

}
