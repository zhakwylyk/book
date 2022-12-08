<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $settings = Settings::all();
        return view('admin.setting.index', compact('settings'));
    }

}
