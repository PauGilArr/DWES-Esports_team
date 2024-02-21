<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Muestra un listado de los mensajes recibidos.
     */
    public function index()
    {
        $messages = Message::orderByDesc('created_at')->paginate(8);
        return view('messages.index', compact('messages'));
    }

    /**
     * Muestra el formulario para enviar un mensaje.
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Guarda el mensaje en la base de datos.
     */
    public function store(MessageRequest $request)
    {
        $message = new Message();
        $message->name = $request->get('name');
        $message->subject = $request->get('subject');
        $message->text = $request->get('text');
        $message->save();

        return view('messages.successful');
    }

    /**
     * Muestra el mensaje especificado.
     */
    public function show(Message $message)
    {
        if ($message->readed == 0) {
            $message->readed = 1;
            $message->save();
        }
        return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Borra el mensaje especificado de la base de datos.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index');
    }
}
