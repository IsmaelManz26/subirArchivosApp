@extends('layouts.app')

@section('content')
    <h1>Todas las Fotos</h1>
    <a href="{{ route('subir.index') }}" class="btn btn-secondary mb-3">Volver a la página principal</a>
    <ul class="list-group">
        @foreach($subidos as $subido)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('subir.viewOne', $subido->id) }}">{{ $subido->nombre_original }}</a>
                <img src="{{ url('image/' . $subido->id) }}" alt="{{ $subido->nombre_original }}" width="50">
            </li>
        @endforeach
    </ul>
@endsection