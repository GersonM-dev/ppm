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
        Schema::create('detail_santris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan')->nullable();
            $table->string('NISN', 20)->nullable();
            $table->string('NIK', 16)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('status_anak')->nullable();
            $table->unsignedTinyInteger('anak_ke')->nullable();
            $table->unsignedTinyInteger('jumlah_saudara')->nullable();
            $table->string('hobi')->nullable();
            $table->string('cita-cita')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->unsignedSmallInteger('tinggi_badan')->nullable();
            $table->unsignedSmallInteger('berat_badan')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('riwayat_penyakit')->nullable();
            $table->enum('status_bpjs', ['Tidak Memiliki', 'Memiliki', 'Memiliki KIS'])->nullable();
            $table->enum('status_pip', ['Tidak Memiliki', 'Memiliki'])->nullable();
            $table->string('ijazah_terakhir')->nullable();
            $table->string('nama_sekolah_asal')->nullable();
            $table->string('prodi_sekolah_asal')->nullable();
            $table->year('tahun_masuk_sekolah')->nullable();
            $table->year('tahun_masuk_ppm')->nullable();
            $table->boolean('is_mondok')->nullable();
            $table->string('khatam')->nullable();
            $table->string('asalkelompoksambung')->nullable();
            $table->string('desa')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rtrw')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('media_sosial')->nullable();
            $table->boolean('is_motor')->nullable();
            $table->boolean('is_sepeda')->nullable();
            $table->boolean('is_laptop')->nullable();
            $table->string('sim')->nullable();
            $table->string('image_ktp_path')->nullable();
            $table->string('image_pasfoto_path')->nullable();
            $table->string('no_kk', 16)->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nik_ayah', 16)->nullable();
            $table->string('tempat_lahir_ayah')->nullable();
            $table->date('tanggal_lahir_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->unsignedInteger('penghasilan_ayah')->nullable();
            $table->string('no_hp_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nik_ibu', 16)->nullable();
            $table->string('tempat_lahir_ibu')->nullable();
            $table->date('tanggal_lahir_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->unsignedInteger('penghasilan_ibu')->nullable();
            $table->string('no_hp_ibu')->nullable();
            $table->boolean('is_ayah_alive')->nullable();
            $table->boolean('is_ibu_alive')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_santris');
    }
};
