@extends('plantilla')

@section('title', 'Lista de Plantaciones')

@section('content')
    <h2 class="text-center">Listado de Plantaciones</h2>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="text-end mb-3">
        <a href="{{ route('plantacion.create') }}" class="btn btn-success">Nueva Plantación</a>
    </div>

    <table class="table table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Ubicación</th>
                <th>Fecha</th>
                <th>Participantes</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plantaciones as $plantacion)
                <tr>
                    <td>{{ $plantacion->id }}</td>
                    <td>{{ $plantacion->ubicacion }}</td>
                    <td>{{ $plantacion->fecha }}</td>
                    <td>{{ $plantacion->participantes }}</td>
                    <td>
                        <a href="{{ route('plantacion_editar', $plantacion->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('plantaciones.destroy', $plantacion->id) }}" method="POST" style="display:inline;">
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
