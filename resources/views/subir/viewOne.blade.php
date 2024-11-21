@extends('layouts.app')

@section('content')
    <h1>{{ $subido->nombre_original }}</h1>
    <img src="{{ url('image/' . $subido->id) }}" alt="{{ $subido->nombre_original }}" class="img-fluid">
    <a href="{{ route('subir.index') }}" class="btn btn-secondary mt-3">Volver a la página principal</a>
@endsection