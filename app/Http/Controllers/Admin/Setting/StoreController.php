<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\StoreRequest;
use App\Models\Settings;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(StoreRequest $request){

     $data = $request->validated();
     Settings::firstOrCreate($data);

     return redirect()->route('admin.setting.index');


    }
}
