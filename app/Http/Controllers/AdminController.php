<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        if(Auth::check() && Auth::user()->rol === 'admin'){
            return view('admin.dashboard');
        } else{
            abort(403);
        }
    }
}
