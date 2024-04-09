@extends('layouts.login-master')

@section('content')
<div class="form-container">
    <form action="/login" method="post">
        @csrf
        <h1 class="mb-4">Log In</h1>
        @include('layouts.partials.messages')

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Log In</button>

        <div class="text-end">
            <a href="{{ url('/register') }}" class="btn btn-link">Sign Up</a>
        </div>
    </form>
</div>
@endsection
