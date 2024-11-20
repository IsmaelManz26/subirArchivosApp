@extends('layouts.app')

@section('content')
    <h1>Fotos Subidas</h1>
    @if($subidos->isEmpty())
        <p>No hay fotos subidas. <a href="{{ route('subir.create') }}">Subir una foto</a></p>
    @else
        <ul>
            @foreach($subidos as $subido)
                <li><a href="{{ route('subir.viewOne', $subido->id) }}">{{ $subido->nombre_original }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection