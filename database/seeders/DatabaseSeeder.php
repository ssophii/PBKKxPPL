<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Profil;
use App\Models\Matkul;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $matkul1 = Matkul::create([
            'matkul' => 'PBKK',
        ]);

        $profil1 = Profil::create([
            'nama' => 'Sophina Shafa Salsabila',
            'npm' => 'G1A022021',
            'semester' => 5,
            'ip_semester' => 4.00,
            'email' => 'sophinass@mail.com',
            'telepon' => '085268966176',
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '2003-10-18',
            'aktif' => 1,
            'matkul_id' => $matkul1->id,
        ]);

        $profil1 = Profil::create([
            'nama' => 'Muhammad Fachrurrozi',
            'npm' => 'G1A021018',
            'semester' => 7,
            'ip_semester' => 4.00,
            'email' => 'fachrurrozi@mail.com',
            'telepon' => '085268023456',
            'jenis_kelamin' => 'Laki-Laki',
            'tanggal_lahir' => '2000-12-11',
            'aktif' => 1,
            'matkul_id' => $matkul1->id,
        ]);

        $profil1 = Profil::create([
            'nama' => 'M. Anjasfedo Afridiansah',
            'npm' => 'G1A021037',
            'semester' => 7,
            'ip_semester' => 4.00,
            'email' => 'anjasfedo@mail.com',
            'telepon' => '085268023456',
            'jenis_kelamin' => 'Laki-Laki',
            'tanggal_lahir' => '2000-01-18',
            'aktif' => 1,
            'matkul_id' => $matkul1->id,
        ]);
    }
}
