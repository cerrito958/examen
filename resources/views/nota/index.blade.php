@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="d-flex alignt-items-center justify-content-between mb-3">
            <h5>NOTAS</h5>
            @if (auth()->user()->personal)
                <a class="btn btn-success" href="{{ url('/nota/create')}}">Crear</a>
            @endif
        </div>

        <div class="container">
            <div class="card card-shadow-sm mb-4">
                <div class="card-body">
                    @if ($notas->count())
                    @foreach ($notas as $nota)
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{url('/nota/show', [$nota->id])}}">{{$nota->titulo}}</a>
                            @if (auth()->user()->personal)
                                <a class="btn btn-primary" href="{{url('/nota/edit', [$nota->id])}}">Editar</a>
                            @endif
                        </div>
                        <br>
                    @endforeach
                    @else
                        <h3>No se ha publicado ninguna nota.</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection