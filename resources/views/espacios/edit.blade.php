@extends('layout')

@section('content')
<h2>Editar Espacio</h2>

@include('espacios.partials.form', [
    'route' => route('espacios.update', $espacio),
    'method' => 'PUT',
    'espacio' => $espacio
])

@endsection
