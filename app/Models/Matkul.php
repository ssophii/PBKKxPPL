<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    
    protected $table = 'matkuls';
    protected $fillable = [
        'matkul',
    ];

    
    public function profil()
    {
        return $this->hasMany(Profil::class);
    }
}



