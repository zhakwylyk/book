<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Banner\UpdateRequest;
use App\Models\Settings;
use App\Models\ads;
use Illuminate\Http\Request;


class UpdateController extends Controller
{
    public function index(UpdateRequest $request, ads $ads)
    {
        $data = $request->validated();
        $ads->update($data);
        return view('admin.banner.show', compact('ads'));
    }

}
