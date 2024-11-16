<!-- resources/views/signup.blade.php -->
@extends('layout.master')

@section('content')
    <h2>Sign Up</h2>
    <form action="{{ route('signup') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="namaPengguna">Name</label>
            <input type="text" name="namaPengguna" id="namaPengguna" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="emailPengguna">Email</label>
            <input type="email" name="emailPengguna" id="emailPengguna" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamatPengguna">Address</label>
            <input type="text" name="alamatPengguna" id="alamatPengguna" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nomorTelepon">Phone Number</label>
            <input type="text" name="nomorTelepon" id="nomorTelepon" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jenisKelamin">Gender</label>
            <select name="jenisKelamin" id="jenisKelamin" class="form-control" required>
                <option value="L">Male</option>
                <option value="P">Female</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>

    <p class="mt-3">Already have an account? <a href="{{ route('login') }}">Login</a></p>
@endsection
