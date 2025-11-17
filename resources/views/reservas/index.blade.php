@extends('layout')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Listado de Reservas</h2>
    <a href="{{ route('reservas.create') }}" class="btn btn-primary">Crear Reserva</a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Espacio</th>
            <th>Solicitante</th>
            <th>Fecha</th>
            <th>Inicio</th>
            <th>Fin</th>
            <th>Motivo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($reservas as $r)
            <tr>
                <td>{{ $r->id }}</td>
                <td>{{ $r->espacio->nombre }}</td>
                <td>{{ $r->solicitante }}</td>
                <td>{{ $r->fecha }}</td>
                <td>{{ $r->hora_inicio }}</td>
                <td>{{ $r->hora_fin }}</td>
                <td>{{ $r->motivo }}</td>
                <td>
                    <a href="{{ route('reservas.edit', $r) }}" class="btn btn-sm btn-warning">Editar</a>

                    <form action="{{ route('reservas.destroy', $r) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Eliminar?')">
                            Eliminar
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $reservas->links() }}

@endsection
