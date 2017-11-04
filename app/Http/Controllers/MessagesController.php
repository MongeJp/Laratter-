<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessageRequest;
use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
  public function show(Message $message)
  {
    return view('messages.show', [
      'message' => $message,
    ]);
  }

  public function create(CreateMessageRequest $request){
      //Obtener el usuario logueado
      $user = $request->user();

      //Creacion del Mensaje
      $message = Message::create([
          'user_id' => $user->id,
          'content' => $request->input('message'),
          'image' => 'http://lorempixel.com/600/338?'.mt_rand(0, 1000)
      ]);
      return redirect('/messages/'.$message->id);
  }
}
