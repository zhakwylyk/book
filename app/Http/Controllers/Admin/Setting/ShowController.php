<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;

use App\Models\Settings;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(Settings $settings)
    {
        $setting = Settings::all();
        return view('admin.setting.show', compact('settings'));
    }

}
