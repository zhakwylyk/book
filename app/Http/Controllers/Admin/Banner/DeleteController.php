<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Settings;
use App\Models\ads;
use Illuminate\Http\Request;
use App\Models\Category;

class DeleteController extends Controller
{
    public function index(ads $ads)
    {
        $ads->delete();
        return redirect()->route('admin.banner.index');
    }

}
