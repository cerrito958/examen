@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card card-shadow-sm mb-4">
            <div class="card-body">
                <form action="{{route('nota.store')}}" method="POST">
                    @include('nota._form', ['btnText' => 'Publicar'])
                </form>
            </div>
        </div>
    </div>
@endsection