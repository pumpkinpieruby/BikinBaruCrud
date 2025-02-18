<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Staff extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'staff'; // Sesuaikan dengan nama tabel

    protected $primaryKey = 'id_staff'; // Primary key di database

    protected $fillable = [
        'nama_staff',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    // Hash password otomatis sebelum disimpan ke database
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
