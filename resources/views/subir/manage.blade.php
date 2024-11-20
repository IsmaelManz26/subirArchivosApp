@extends('layouts.app')

@section('content')
    <h1>Gestionar Fotos</h1>
    <a href="{{ route('subir.index') }}" class="btn btn-secondary mb-3">Volver a la página principal</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <ul>
        @foreach($subidos as $subido)
            <li>
                <img src="{{ asset('storage/private/ejercicio/' . $subido->nombre) }}" alt="{{ $subido->nombre_original }}" width="100">
                <form action="{{ route('subir.destroy', $subido->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection