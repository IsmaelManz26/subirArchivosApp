@extends('layouts.app')

@section('content')
    <h1>Subir Foto</h1>
    <form action="{{ route('subir.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit" class="btn btn-primary">Subir</button>
    </form>
    <a href="{{ route('subir.index') }}" class="btn btn-secondary mt-3">Volver a la página principal</a>
@endsection