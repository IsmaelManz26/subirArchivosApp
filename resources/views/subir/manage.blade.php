@extends('layouts.app')

@section('content')
    <h1>Gestionar Fotos</h1>
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
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection