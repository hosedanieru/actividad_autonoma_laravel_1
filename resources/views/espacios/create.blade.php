@extends('layout')

@section('content')
<h2>Crear Espacio</h2>

@include('espacios.partials.form', [
    'route' => route('espacios.store'),
    'method' => 'POST',
    'espacio' => null
])

@endsection
