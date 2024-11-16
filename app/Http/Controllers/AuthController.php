<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function prosesLogin(Request $request)
    {
        $request->validate([
            'emailPengguna' => 'required|email',
            'password' => 'required',
        ]);
    
        // Pastikan menggunakan 'emailPengguna' dan 'password' yang ada di database
        $credentials = $request->only('emailPengguna', 'password');
    
        // Menggunakan auth()->attempt untuk login
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            //dd(auth()->user());

            if (auth()->user()->is_admin == 1) {
                return redirect()->route('dashboard_admin');
            }
            return redirect()->route('home');
        }

        // Jika kredensial tidak valid
        return back()->withErrors([
            'emailPengguna' => 'Email atau Password salah',
        ]);
    }

    public function dashboardAdmin()
    {
        // Pastikan hanya admin yang bisa mengakses dashboard ini
        if (auth()->check() && auth()->user()->is_admin == 1) {
            return view('dashboard_admin');  // Tampilkan tampilan dashboard untuk admin
        }

        // Jika bukan admin, redirect ke halaman lain
        return redirect()->route('home');
    }

    public function prosesSignUp(Request $request)
    {
        $request->validate([
            'emailPengguna' => 'required|email|unique:pengguna,emailPengguna',
            'password' => 'required|min:8',
            'confirmPassword' => 'required',
            'namaPengguna' => 'required',
            'alamatPengguna' => 'required',
            'jenisKelamin' => 'required',
            'nomorTelepon' => 'required',
        ]);

        // Pastikan password dan confirm password cocok
        if ($request->password != $request->confirmPassword) {
            return back()->withErrors([
                'confirmPassword' => 'Password dan Confirm Password tidak sama.',
            ]);
        }

        // Enkripsi password
        $request['password'] = bcrypt($request->password);

        // Simpan data pengguna baru
        Pengguna::create($request->all());

        // Redirect ke halaman login setelah registrasi
        return redirect()->route('login');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }

    public function getAuthIdentifierName()
    {
        return 'emailPengguna';  // Menggunakan emailPengguna sebagai field login
    }
}
