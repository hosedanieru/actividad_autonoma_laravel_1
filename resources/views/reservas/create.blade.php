@extends('layout')

@section('content')
<h2>Crear Reserva</h2>

@include('reservas.partials.forms', [
    'route' => route('reservas.store'),
    'method' => 'POST',
    'reserva' => null,
    'espacios' => $espacios
])

@endsection
