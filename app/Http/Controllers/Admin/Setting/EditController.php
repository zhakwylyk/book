<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;


class EditController extends Controller
{
    public function index(Settings $settings)
    {
        return view('admin.setting.edit', compact('settings'));
    }

}
