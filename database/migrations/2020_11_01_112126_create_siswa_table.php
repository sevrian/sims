<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->integer('siswa_id')->nullable();
            $table->integer('nisn')->nullable();
            $table->integer('kelas_id')->nullable();
            $table->integer('password')->nullable();
            $table->string('nama')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->string('email')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('telp_ayah')->nullable();
            $table->string('telp_ibu')->nullable();
            $table->string('alamat_orrtu')->nullable();
            $table->string('skhun')->nullable();
            $table->string('nem')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('status_awal_masuk')->nullable();
            $table->string('status_siswa')->nullable();
            $table->integer('createby')->nullable();
            $table->integer('updateby')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
