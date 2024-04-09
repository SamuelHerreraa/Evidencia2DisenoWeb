@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>Lista de Alumnos</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($students->isEmpty())
        <p>No hay ningún alumno registrado.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Carrera</th>
                    <th>Estatus</th>
                    <th>Acciones</th> <!-- Nuevo encabezado para las acciones -->
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->nombre }}</td>
                        <td>{{ $student->apellidos }}</td>
                        <td>{{ $student->fecha_nacimiento }}</td>
                        <td>{{ $student->carrera->nombreCarrera }}</td>
                        <td>{{ $student->estatus }}</td>
                        <td>
                            <!-- Botón de eliminar -->
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
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
