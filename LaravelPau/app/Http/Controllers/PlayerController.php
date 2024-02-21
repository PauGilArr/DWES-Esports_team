<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PlayerRequest;

class PlayerController extends Controller
{
    /**
     * Muestra la página del listado de jugadores visibles. Si ha iniciado sesión un administrador, se muestran todos los jugadores
     * en la base de datos.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->rol == 'admin') {
            $players = Player::all();
        } else {
            $players = Player::where('visible', 1)->get();
        }

        return view('players.index', compact('players'));
    }

    /**
     * Muestra el formulario para añadir un jugador nuevo.
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Guarda el jugador nuevo en la base de datos.
     */
    public function store(PlayerRequest $request)
    {
        $player = new Player();
        $player->name = $request->get('name');
        $player->age = $request->get('age');
        $player->poles = $request->get('poles');
        $player->wins = $request->get('wins');
        $player->twitter = $request->get('twitter');
        $player->instagram = $request->get('instagram');
        $player->twitch = $request->get('twitch');
        $player->visible = $request->has('visible') ? 1 : 0;
        $player->save();
        $request->file('photo')->storeAs('public', $player->id .'.png');

        return view('players.show', compact('player'));
    }

    /**
     * Muestra la página de los detalles del jugador elegido.
     */
    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Player $player)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
    }

    /**
     * Hace que el jugador elegido aparezca en el listado de jugadores visibles o no.
     */
    public function makeVisibleInvisible(Player $player) {
        if ($player->visible == 1) {
            $player->visible = 0;
            $player->save();
        } else {
            $player->visible = 1;
            $player->save();
        }

        return redirect()->back();
    }
}
