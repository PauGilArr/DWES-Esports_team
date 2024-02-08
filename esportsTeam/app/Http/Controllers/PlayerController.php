<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use App\Http\Requests\PlayerRequest;

class PlayerController extends Controller
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
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlayerRequest $request)
    {
        $player = new Player();
        $player->name = $request->get('name');
        $player->age = $request->get('age');
        $player->poles = $request->get('poles');
        $player->victories = $request->get('victories');
        $player->twitter = $request->get('twitter');
        $player->instagram = $request->get('instagram');
        $player->twitch = $request->get('twitch');
        $player->visibility = $request->has('visibility') ? 1 : 0;
        $player->save();

        return view('players.stored', compact('player'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Player $player)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Player $player)
    {
        //
    }
}
