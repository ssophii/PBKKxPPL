<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil';
    protected $fillable = [
        'nama',
        'npm',
        'semester',
        'ip_semester',
        'email',
        'telepon',
        'jenis_kelamin',
        'tanggal_lahir',
        'aktif'
        ];
}