<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class Pengguna extends Authenticatable
{
    protected $table = 'pengguna';
    protected $primaryKey = 'idPengguna';

    protected $guarded = ['idPengguna'];
    protected $fillable = ['namaPengguna', 'emailPengguna', 'password', 'alamatPengguna', 'nomorTelepon', 'is_admin'];

    // Field untuk login
    public function getAuthIdentifierName()
    {
        return 'emailPengguna';  // Menggunakan 'emailPengguna' untuk autentikasi
    }

    public function getAuthIdentifier()
    {
        return $this->idPengguna;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
