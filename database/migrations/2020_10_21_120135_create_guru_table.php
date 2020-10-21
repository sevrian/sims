<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();
            $table->string('nip')->nullable();
            $table->integer('jenisptk_id_');
            $table->integer('agama_id');
            $table->integer('negara_id');
            $table->string('password');
            $table->string('nama_guru');
            $table->string('tanggal_lahir');
            $table->string('temapat_lahir');
            $table->string('jenis_kelamin');
            $table->string('nik')->nullable();
            $table->string('nuptk')->nullable();
            $table->string('telepon')->nullable();
            $table->string('alamat');
            $table->string('email');
            $table->string('status_aktif');
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('guru');
    }
}
