<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\UpdateRequest;
use App\Models\Settings;
use Illuminate\Http\Request;


class UpdateController extends Controller
{
    public function index(UpdateRequest $request, Settings $settings)
    {
        $data = $request->validated();
        $settings->update($data);
        return view('admin.setting.show', compact('settings'));
    }

}
