@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Fotos Subidas</h1>
        <div class="mb-4">
            <a href="{{ route('subir.create') }}" class="btn btn-primary">Subir una foto</a>
            <a href="{{ route('subir.viewAll') }}" class="btn btn-secondary">Ver todas las fotos</a>
            <a href="{{ route('subir.manage') }}" class="btn btn-danger">Gestionar fotos</a>
        </div>
        @if($subidos->isEmpty())
            <p>No hay fotos subidas. <a href="{{ route('subir.create') }}">Subir una foto</a></p>
        @else
            <ul class="list-group">
                @foreach($subidos as $subido)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('subir.viewOne', $subido->id) }}">{{ $subido->nombre_original }}</a>
                        <img src="{{ url('image/' . $subido->id) }}" alt="{{ $subido->nombre_original }}" width="50">
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection