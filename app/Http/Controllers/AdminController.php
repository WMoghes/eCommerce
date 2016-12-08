<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }

    public function logout()
    {
        if(Auth::check())
        {
            //dd(Auth::user());
            Auth::logout();
            return redirect('/');
        }
    }
}
