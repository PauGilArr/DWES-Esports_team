<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEditRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Muestra los detalles del usuario especificado.
     */
    public function show(User $user)
    {
        if (Auth::user()->id == $user->id) {
            return view('users.show', compact('user'));
        } else {
            return redirect()->route('index');
        }

    }

    /**
     * Muestra el formulario para editar el usuario especificado.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Actualiza el usuario especificado en la base de datos.
     */
    public function update(UserEditRequest $request, User $user)
    {
        $user->birthday = $request->get('birthday');
        $user->password = Hash::make($request->get('password'));
        $user->save();

        return view('users.show', compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
