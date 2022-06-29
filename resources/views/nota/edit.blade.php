@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card card-shadow-sm mb-4">
            <div class="card-body">
                <form action="{{route('nota.update', $nota)}}" method="POST">
                    @method('PATCH')
                    @include('nota._form', ['btnText' => 'Actualizar'])
                </form>
            </div>
        </div>
    </div>
@endsection