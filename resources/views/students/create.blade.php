@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>Add Student</h1>
    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos">
        </div>
        <div class="form-group">
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
        </div>
        
        <div class="form-group">
            <label for="carrera_id">Carrera:</label>
            <select class="form-control" id="carrera_id" name="carrera_id">
                @foreach($careers as $career)
                    <option value="{{ $career->id }}">{{ $career->nombreCarrera }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="estatus">Estatus:</label>
            <select class="form-control" id="estatus" name="estatus">
                <option value="Inscrito">Inscrito</option>
                <option value="No Inscrito">No Inscrito</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
