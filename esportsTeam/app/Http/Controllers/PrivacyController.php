<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Muestra la página de políticas de privacidad.
     */
    public function politics() {
        return view('privacy.politics');
    }
}
