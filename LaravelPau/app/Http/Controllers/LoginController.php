<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Muestra el formulario para registrar un usuario nuevo.
     */
    public function signupForm() {
        return view('auth.signup');
    }

    /**
     * Registra el usuario nuevo en la base de datos e inicia sesión como ese usuario.
     */
    public function signup(SignupRequest $request) {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->birthday = $request->get('birthday');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        Auth::login($user);

        return redirect()->route('users.show', compact('user'));
    }

    /**
     * Muestra el usuario de inicio de sesión si no se ha iniciado sesión como usuario.
     * En caso contrario, muestra los datos del perfil del usuario iniciado
     */
    public function loginForm() {
        if (Auth::viaRemember()) {
            return redirect()->route('users.show');
        } else if (Auth::check()) {
            return redirect()->route('users.show');
        } else {
            return view ('auth.login');
        }
    }

    /**
     * Inicia sesión como usuario a partir de los datos del formulario y redirigirá a la pagina de los detalles del usuario.
     * Si ha habido algun error, lo mostrará por pantalla.
     */
    public function login(Request $request) {
        $credentials = $request->only('name', 'password');
        $rememberLogin = ($request->get('remember')) ? true : false;

        if (Auth::guard('web')->attempt($credentials, $rememberLogin)) {
            $request->session()->regenerate();
            return redirect()->route('users.show', Auth::user());
        } else {
            $error = 'Error al iniciar sesión';
            return view('auth.login', compact('error'));
        }
    }

    /**
     * Cierra la sesión y redirige a la página de inicio.
     */
    public function logout(Request $request) {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
