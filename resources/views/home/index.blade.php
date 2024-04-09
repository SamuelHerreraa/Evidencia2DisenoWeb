@extends('layouts.app-master')

@section('content')
<div class="container">
    @auth
    <h1>Dashboard</h1>
    <br>
    <p>Welcome {{ auth()->user()->name }}</p>

    <!-- Mensaje de éxito -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Botones para ejecutar acciones -->
    <div>
        <a href="{{ route('students.create') }}" class="btn btn-primary">Añadir Alumno</a>
        <a href="{{ route('careers.create') }}" class="btn btn-primary">Añadir Carrera</a>
        <a href="{{ route('students.index') }}" class="btn btn-primary">Consultar Alumno</a>
        <a href="{{ route('careers.index') }}" class="btn btn-primary">Consultar Carrera</a>
    </div>
    @endauth

    @guest
    <br>
    <br>
    <p>To see all content please <a href="/login">Log In</a></p>
    @endguest

</div>
@endsection
