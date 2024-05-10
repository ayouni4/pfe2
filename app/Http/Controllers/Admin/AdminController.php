<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    public function form_admin(Request $request){
        $user = Auth::user();

        return view('admin.dashbord', ['user' => $user]);
    }
}
