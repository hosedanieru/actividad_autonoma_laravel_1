<form action="{{ $route }}" method="POST" class="card p-4">
    @csrf
    @if($method === 'PUT')
        @method('PUT')
    @endif

    <div class="mb-3">
        <label class="form-label">Espacio</label>
        <select name="espacio_id" class="form-control" required>
            <option value="">Seleccione...</option>
            @foreach($espacios as $e)
                <option value="{{ $e->id }}"
                    {{ old('espacio_id', $reserva->espacio_id ?? '') == $e->id ? 'selected':'' }}>
                    {{ $e->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Solicitante</label>
        <input type="text" name="solicitante" class="form-control"
               value="{{ old('solicitante', $reserva->solicitante ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Fecha</label>
        <input type="date" name="fecha" class="form-control"
               value="{{ old('fecha', $reserva->fecha ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Hora Inicio</label>
        <input type="time" name="hora_inicio" class="form-control"
               value="{{ old('hora_inicio', $reserva->hora_inicio ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Hora Fin</label>
        <input type="time" name="hora_fin" class="form-control"
               value="{{ old('hora_fin', $reserva->hora_fin ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Motivo (opcional)</label>
        <textarea name="motivo" class="form-control">{{ old('motivo', $reserva->motivo ?? '') }}</textarea>
    </div>

    <button class="btn btn-success">Guardar</button>
</form>
