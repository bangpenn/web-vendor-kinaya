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
        Schema::create('info_perusahaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->index('fk_perusahaan_detail_to_users');
            $table->string('kategori_bidang_perusahaan');
            $table->string('nama_perusahaan');
            $table->string('jumlah_karyawan');
            $table->longText('hasil_jadi');
            $table->longText('video_perusahaan');
            $table->longText('file_katalog');
            $table->string('no_telp_perusahaan');
            $table->string('email_perusahaan');
            $table->string('sosmed_perusahaan');
            $table->text('alamat_perusahaan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_perusahaan');
    }
};
