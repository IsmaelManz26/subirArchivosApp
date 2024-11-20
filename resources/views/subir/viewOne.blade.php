@extends('layouts.app')

@section('content')
    <h1>{{ $subido->nombre_original }}</h1>
    <img src="{{ asset('storage/private/ejercicio/' . $subido->nombre) }}" alt="{{ $subido->nombre_original }}">
@endsection