<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function signupForm() {
        return view('auth.signup');
    }

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

    public function loginForm() {
        if (Auth::viaRemember()) {
            return redirect()->route('users.show');
        } else if (Auth::check()) {
            return redirect()->route('users.show');
        } else {
            return view ('auth.login');
        }
    }

    public function login(Request $request) {
        $credentials = $request->only('name', 'password');
        $rememberLogin = ($request->get('remember')) ? true : false;

        if (Auth::guard('web')->attempt($credentials, $rememberLogin)) {
            $request->session()->regenerate();
            return redirect()->route('users.show', Auth::user());
        } else {
            $error = 'Error al acceder a la aplicacion';
            return view('auth.login', compact('error'));
        }
    }

    public function logout(Request $request) {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
