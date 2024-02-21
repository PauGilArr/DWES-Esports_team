<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Muestra la página de términos y condiciones de uso.
     */
    public function terms() {
        return view('service.terms');
    }
}
