<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\StoreRequest;
use App\Models\Settings;
use App\Models\ads;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(StoreRequest $request){

     $data = $request->validated();
        ads::firstOrCreate($data);

     return redirect()->route('admin.banner.index');


    }
}
