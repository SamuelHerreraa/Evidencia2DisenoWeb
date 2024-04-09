@extends('layouts.app-master')

@section('content')
<div class="container">
    <h1>Add Career</h1>
    <form method="POST" action="{{ route('careers.store') }}">
        @csrf
        <div class="form-group">
            <label for="nombre_carrera">Nombre de la Carrera:</label>
            <input type="text" class="form-control" id="nombre_carrera" name="nombre_carrera">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection