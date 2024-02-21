<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    /**
     * Muestra la página de politicas de cookies.
     */
    public function politics() {
        return view('cookies.politics');
    }

    /**
     * Muestra la página de configuración de cookies.
     */
    public function settings() {
        return view('cookies.settings');
    }
}
