<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /*
     * $guarded variable protegida que contiene los campos que protegeremos
     * Suele lanzar el error de MassAsignmentException*/
    protected $guarded = [];
}
