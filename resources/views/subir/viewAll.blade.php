@extends('layouts.app')

@section('content')
    <h1>Todas las Fotos</h1>
    <ul>
        @foreach($subidos as $subido)
            <li><a href="{{ route('subir.viewOne', $subido->id) }}">{{ $subido->nombre_original }}</a></li>
        @endforeach
    </ul>
@endsection