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
    <form action="{{ route('activities.store') }}" method="POST">
        @csrf {{-- Token de seguridad obligatorio en Laravel --}}

        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>

        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicacion</label>
            <input type="string" class="form-control" id="ubicacion" name="ubicacion" required>
        </div>

        <div class="mb-3">
            <label for="duracion" class="form-label">Duracion</label>
            <input type="number" class="form-control" id="duracion" name="duracion" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
        </div>

         <div class="mb-3">
            <label for="publico" class="form-label">Publico</label>
            <input type="number" class="form-control" id="publico" name="publico" required>
        </div>

        <button type="submit" class="btn btn-success">Crear Actividad</button>
    </form>
</div>
@endsection
