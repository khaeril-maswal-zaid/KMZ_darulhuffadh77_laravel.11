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
        Schema::create('tholabahs', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16);
            $table->string('nama');
            $table->string('jenis_kelamin', 50);
            $table->string('tempat_lahir', 100);
            $table->string('tanggal_lahir', 20);
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->string('kontak_ayah');
            $table->string('kontak_ibu');
            $table->string('nisn', 20);
            $table->string('asal_sekolah');
            $table->year('tahun_tamat_sd');

            $table->boolean('experiment');
            $table->string('nisdh');
            $table->year('angkatan');

            $table->string('kategori_santri_baru'); //Daftar, Pengembalian, Tholabun

            $table->string('kelas');
            $table->boolean('active');

            $table->string('kategori'); // 'Tholabun', 'Pengabdian luar', 'Pembina', 'Alumni'

            $table->string('depertement');

            $table->string('kontak');
            $table->string('marhalah');
            $table->string('tahun_alumni');

            $table->string('picture')->default('tholabah-default.png');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tholabahs');
    }
};
