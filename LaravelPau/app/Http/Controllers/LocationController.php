<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Muestra la página de la localización del equipo en Google Maps.
     */
    public function index() {
        return view('location.index');
    }
}
