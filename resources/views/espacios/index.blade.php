@extends('layout')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Listado de Espacios</h2>
    <a href="{{ route('espacios.create') }}" class="btn btn-primary">Crear Espacio</a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Capacidad</th>
            <th>Ubicación</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($espacios as $e)
            <tr>
                <td>{{ $e->id }}</td>
                <td>{{ $e->nombre }}</td>
                <td>{{ $e->tipo }}</td>
                <td>{{ $e->capacidad }}</td>
                <td>{{ $e->ubicacion }}</td>
                <td>
                    <a href="{{ route('espacios.edit', $e) }}" class="btn btn-sm btn-warning">Editar</a>

                    <form action="{{ route('espacios.destroy', $e) }}" method="POST" class="d-inline">
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

{{ $espacios->links() }}

@endsection
