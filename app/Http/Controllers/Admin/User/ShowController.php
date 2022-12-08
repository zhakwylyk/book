<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function index(User $user)
    {
        $users = User::all();
//         dd($users);
        return view('admin.user.show', compact('user'));
    }

}
