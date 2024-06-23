<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('umur')->nullable();
            $table->timestamps();
        });
        DB::table('pasien')->insert([
            [
                'nama' => 'Alifa',
                'alamat' => 'jl.Asoka',
                'nomor_telepon' => '081302021009',
                'umur' => '21',
            ],
            [
                'nama' => 'Jihan Shakila',
                'alamat' => 'Marelan',
                'nomor_telepon' => '083816908011',
                'umur' => '21',
            ],
            [
                'nama' => 'Nazwa Putri Ananda',
                'alamat' => 'Jl. Namorambe',
                'nomor_telepon' => '081345671233',
                'umur' => '21',
            ],
            [
                'nama' => 'Bagus Kurniawan',
                'alamat' => 'Jl. Alfallah no.18',
                'nomor_telepon' => '085768908810',
                'umur' => '30',
            ],
            [
                'nama' => 'Rio Pradimas',
                'alamat' => 'Jl. salak no.10',
                'nomor_telepon' => '083140509921',
                'umur' => '28',
            ],
            [
                'nama' => 'Nindya Putri',
                'alamat' => 'Jl. semangka no.133',
                'nomor_telepon' => '082348807890',
                'umur' => '25',
            ],
            [
                'nama' => 'Reza Radika',
                'alamat' => 'Jl. manggis',
                'nomor_telepon' => '082234903871',
                'umur' => '50',
            ],
            [
                'nama' => 'Putra Gio',
                'alamat' => 'Jl. rambutan',
                'nomor_telepon' => '085200893952',
                'umur' => '38',
            ],
            [
                'nama' => 'Ulfa azzahra',
                'alamat' => 'Jl. walet no.15',
                'nomor_telepon' => '083877970901',
                'umur' => '67',
            ],
            [
                'nama' => 'Chandra Kusuma',
                'alamat' => 'Jl. Kenangan no.20',
                'nomor_telepon' => '085876221011',
                'umur' => '22',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
