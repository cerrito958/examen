<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComentarioRequest;
use App\Models\Comentario;
use App\Models\Nota;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Nota $nota, ComentarioRequest $request)
    {
        $comentario = Comentario::create($request->validated());
        $comentario->idusuario = auth()->user()->id;
        $comentario->idnota = $nota->id;
        $comentario->save();

        return redirect()->route('nota.show', $nota)->with('messagealert', 'Comentario publicado correctamente.');
    }
}
