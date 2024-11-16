<!-- resources/views/home.blade.php -->
@extends('layout.master')

@section('content')
    <h2>Welcome to the Home Page</h2>
    <p>Here you can view the available products, and manage your transactions.</p>

    @auth
        <p>Welcome, {{ Auth::pengguna()->namaPengguna }}!</p>
        @if(Auth::user()->is_admin == 1)
            <p>You are an admin.</p>
        @else
            <p>You are a buyer.</p>
        @endif
    @else
        <p>Please log in or sign up to continue.</p>
    @endauth
@endsection
