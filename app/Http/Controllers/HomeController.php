<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }
}
