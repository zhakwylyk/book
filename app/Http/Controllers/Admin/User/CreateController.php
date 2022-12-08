<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CreateController extends Controller
{
    public function index()
    {
        $roles = User::getRoles();
//         dd($roles);
        return view('admin.user.create', compact('roles'));
    }

}
