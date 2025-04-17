@extends('plantilla') {{-- Usa una plantilla base con @yield --}}

@section('content')
<div class="container">
    <h2 class="mb-4">Crear Nueva Plantación</h2>

    {{-- Mensajes de éxito o error --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulario --}}
    <form action="{{ route('plantaciones.store') }}" method="POST">
        @csrf {{-- Token de seguridad obligatorio en Laravel --}}

        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicación</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha de Plantación</label>
            <input type="string" class="form-control" id="fecha" name="fecha" required>
        </div>

        <div class="mb-3">
            <label for="participantes" class="form-label">Número de Participantes</label>
            <input type="number" class="form-control" id="participantes" name="participantes" required>
        </div>

        <button type="submit" class="btn btn-success">Crear Plantación</button>
    </form>
</div>
@endsection
