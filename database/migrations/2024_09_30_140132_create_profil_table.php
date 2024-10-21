<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nama');
            $table->string('npm');
            $table->integer('semester')->default(1);
            $table->decimal('ip_semester', 3, 2)->default(0.00);
            $table->string('email');
            $table->string('telepon');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->date('tanggal_lahir');
            $table->boolean('aktif')->default(true);
            $table->foreignIdFor(\App\Models\Matkul::class, 'matkul_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil');
    }
};