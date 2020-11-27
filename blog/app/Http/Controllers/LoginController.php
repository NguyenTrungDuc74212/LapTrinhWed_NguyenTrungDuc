<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function load_login()
    {
    	return view('admin.login');
    }
}
