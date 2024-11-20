@extends('layouts.app')

@section('content')
    <h1>Subir Foto</h1>
    <form action="{{ route('subir.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">Subir</button>
    </form>
@endsection