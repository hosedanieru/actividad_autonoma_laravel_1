@extends('layout')

@section('content')
<h2>Editar Reserva</h2>

@include('reservas.partials.form', [
    'route' => route('reservas.update', $reserva),
    'method' => 'PUT',
    'reserva' => $reserva,
    'espacios' => $espacios
])

@endsection
