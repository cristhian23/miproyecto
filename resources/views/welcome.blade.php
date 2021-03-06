
@extends('layouts.app')
@section('content')

<div class="jumbotron text-center">
    <h2>Mi proyecto</h2>
        <nav>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link" clas href="/">Home</a>
                </li>
            </ul>
        </nav>
</div>
<div class="row">
    @forelse ($messages as $message) 
        <div class="col-6">
            <img class="img-thumbnail" src="{{ $message->image }}">
            <p class="card-text">
                {{ $message->content }}


                <a href="/messages/{{ $message->id }}">Leer mas</a>
            </p>
        </div>
        @empty
        <p>No hay mensajes destacados.</p>
    @endforelse
    
</div>
@endsection