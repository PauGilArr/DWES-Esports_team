<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function politics() {
        return view('cookies.politics');
    }
    
    public function settings() {
        return view('cookies.settings');
    }
}
