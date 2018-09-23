<?php

namespace App\Http\Controllers;

use App\mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mensajeUsuario extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIdea()
    {

        $mensaje = mensaje::get();

        return $mensaje;
    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {
        csrf_field();
        $data = Request()->validate([
            'descripcion' => 'required',
        ], [
            'descripcion.required' => 'en nombre es obligatorio',
        ]);
        $id = Auth::id();

        $url = 'aaa';
        mensaje::Create([
            'contenido' => $data['descripcion'],
            'usuers_id' => $id,
            'url'       => $url,
        ]);
        return;
    }

}
