@extends('layouts.app')

@section('content')
<div class="container">

    @if(session('messagealert'))
    <div class="alert alert-success text-center" role="alert">
        <strong>{{session('messagealert')}}</strong>
    </div>
    @endif

    <div class="d-flex alignt-items-center justify-content-between mb-3">
        <span></span>
        @if (auth()->user()->personal)
            <a class="btn btn-success" href="{{ url('/nota/edit', $nota)}}">Editar</a>
        @endif
    </div>

    <div class="card card-shadow-sm mb-4">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between">
                <span>{{$nota->usuario->name}}</span>
                <span>{{$nota->created_at}}</span>
            </div>

            <div class="row mt-2">
                <h3>{{$nota->titulo}}</h3>
            </div>
            <hr>
            <div class="">
                {{$nota->contenido}}
            </div>
        </div>
    </div>

    <div>
        <h3>Comentarios:</h3>
    </div>

    <div class="card card-shadow-sm mb-4">
        <div class="card-body">

            @foreach ($nota->comentarios as $comentario)
            <div class="card card-shadow-sm">
                <div class="card-header d-flex justify-content-between">
                    <span>{{$comentario->usuario->name}} @if($comentario->usuario->personal) <span>(interno)</span> @endif</span>
                    <span>{{$comentario->created_at}}</span>
                </div>
                <div class="card-body">
                    {{$comentario->contenido}}
                </div>
            </div>
            <br>
            @endforeach

            <form action="{{route('comentario.store', $nota)}}" method="POST">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="contenido" id="contenido">
                    </textarea>
                </div>
                <div class="mt-1">
                    <input type="submit" class="btn btn-primary" value="Comentar">
                </div>
            </form>
        </div>

    </div>
    @endsection
