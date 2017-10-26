<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
        $messages = [
            [
                'id' => 1,
                'content' => 'Este es mi primer mensaje',
                'image' => 'https://lorempixel.com/600/338?1',
            ],
            [
                'id' => 2,
                'content' => 'Este es mi segundo mensaje',
                'image' => 'https://lorempixel.com/600/338?2',
            ],
            [
                'id' => 3,
                'content' => 'Este es mi tercer mensaje',
                'image' => 'https://lorempixel.com/600/338?3',
            ],
            [
                'id' => 4,
                'content' => 'Este es mi cuarto mensaje',
                'image' => 'https://lorempixel.com/600/338?4',
            ]
        ];
        return view('welcome', ['messages' => $messages]);
    }
}
