<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mensaje extends Model
{
    protected $table    = 'mensajes';
    protected $fillable = [
        'contenido', 'usuers_id', 'url',
    ];
}
