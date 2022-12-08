<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Settings;
use Illuminate\Http\Request;
use App\Models\Category;

class DeleteController extends Controller
{
    public function index(Settings $settings)
    {
        $settings->delete();
        return redirect()->route('admin.setting.index');
    }

}
