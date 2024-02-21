<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Muestra el listado de los eventos próximos.
     * Si un administrador ha iniciado sesión, muestra todos los eventos guardados en la base de datos.
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->rol == 'admin') {
            $events = Event::all();
        } else {
            $events = Event::where('date', '>', date('Y-m-d', time()))
            ->where('visible', 1)->get();
        }

        return view('events.index', compact('events'));
    }

    /**
     * Muestra el formulario para crear un nuevo evento.
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Guarda el evento nuevo en la base de datos.
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
     * Muestra los detalles del evento especificado.
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Muestra el formulario para editar el evento especificado.
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Actualiza el evento especificado en la base de datos.
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
     * Borra el evento especificado de la base de datos.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }

    /**
     * Hace que el evento sea visible o invisible para los usuarios que no son administradores.
     */
    public function makeVisibleInvisible(Event $event)
    {
        if ($event->visible == 1) {
            $event->visible = 0;
            $event->save();
        } else {
            $event->visible = 1;
            $event->save();
        }

        return redirect()->back();
    }

    /**
     * Guarda un like de un evento en la base de datos si no estaba ya antes.
     * Si ya estaba antes, quita el like de la base de datos.
     */
    public function eventLike(Event $event)
    {
        $event->users()->toggle(Auth::user()->id);
        return redirect()->back();
    }
}
