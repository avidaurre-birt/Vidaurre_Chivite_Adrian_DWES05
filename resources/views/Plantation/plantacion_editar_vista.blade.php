@extends('plantilla')

@section('title', 'Editar Plantación')

@section('content')
    <h2 class="text-center">Editar Plantación</h2>

    <form action="{{ route('plantaciones.update', $plantacion->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Ubicación</label>
            <input type="text" name="ubicacion" class="form-control" value="{{ $plantacion->ubicacion }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha</label>
            <input type="text" name="fecha" class="form-control" value="{{ $plantacion->fecha }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Participantes</label>
            <input type="number" name="participantes" class="form-control" value="{{ $plantacion->participantes }}" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('plantacion_vista') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
