<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->rol == 'admin') {
            $events = Event::all();
        } else {
            $events = Event::where('visible', 1)->get();
        }

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {
        $event = new Event();
        $event->name = $request->get('name');
        $event->description = $request->get('description');
        $event->location = $request->get('location');
        $event->date = $request->get('date');
        $event->hour = $request->get('hour');
        $event->type = $request->get('type');
        $event->tags = $request->get('tags');
        $event->visible = $request->has('visible') ? 1 : 0;
        $event->save();

        return view('events.show', compact('event'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Event $event)
    {
        $event->name = $request->get('name');
        $event->description = $request->get('description');
        $event->location = $request->get('location');
        $event->date = $request->get('date');
        $event->hour = $request->get('hour');
        $event->type = $request->get('type');
        $event->tags = $request->get('tags');
        $event->visible = $request->has('visible') ? 1 : 0;
        $event->save();

        return view('events.show', compact('event'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }

    /**
     * Hace que el evento sea visible o invisible para los usuarios que no son administradores.
     */
    public function makeVisibleInvisible(Event $event) {
        if ($event->visible == 1) {
            $event->visible = 0;
            $event->save();
        } else {
            $event->visible = 1;
            $event->save();
        }

        return redirect()->route('events.index');
    }

    public function eventLike(Event $event) {
        $event->users()->toggle(Auth::user()->id);
        return redirect()->back();
    }
}
