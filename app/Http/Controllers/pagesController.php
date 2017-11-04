<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
        $messages = Message::latest()->paginate(10);
        return view('welcome', ['messages' => $messages]);
    }
}
