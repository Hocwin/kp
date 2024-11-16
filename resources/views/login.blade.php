<!-- resources/views/login.blade.php -->
@extends('layout.master')

@section('content')
    <h2>Login</h2>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="emailPengguna">Email</label>
            <input type="email" name="emailPengguna" id="emailPengguna" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <p class="mt-3">Don't have an account? <a href="{{ route('signup') }}">Sign up</a></p>
@endsection
