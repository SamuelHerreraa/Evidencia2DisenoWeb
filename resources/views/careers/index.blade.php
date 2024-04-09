@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>Lista de Carreras</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($careers->isEmpty())
        <p>No hay ninguna carrera registrada.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th> <!-- Nuevo encabezado para las acciones -->
                </tr>
            </thead>
            <tbody>
                @foreach ($careers as $career)
                    <tr>
                        <td>{{ $career->nombreCarrera }}</td>
                        <td>{{ $career->descripcion }}</td>
                        <td>
                            <!-- Botón de eliminar -->
                            <form action="{{ route('careers.destroy', $career->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection