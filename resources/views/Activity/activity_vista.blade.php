@extends('plantilla')

@section('title', 'Lista de Actividades')

@section('content')
    <h2 class="text-center">Listado de Actividades</h2>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="text-end mb-3">
        <a href="{{ route('activity.create') }}" class="btn btn-success">Nueva Actividad</a>
    </div>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Fecha</th>
                <th>Ubicación</th>
                <th>Duración</th>
                <th>Descripción</th>
                <th>Público</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activities as $activity)
                <tr>
                    <td>{{ $activity->id }}</td>
                    <td>{{ $activity->titulo }}</td>
                    <td>{{ $activity->fecha }}</td>
                    <td>{{ $activity->ubicacion }}</td>
                    <td>{{ $activity->duracion }}</td>
                    <td>{{ $activity->descripcion }}</td>
                    <td>{{ $activity->publico }}</td>
                    <td>
                        <a href="{{ route('plantacion_editar', $activity->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('plantaciones.destroy', $activity->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
