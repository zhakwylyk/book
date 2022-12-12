<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\ads;
use Illuminate\Http\Request;


class EditController extends Controller
{
    public function index(ads $ads)
    {
        return view('admin.banner.edit', compact('ads'));
    }

}
