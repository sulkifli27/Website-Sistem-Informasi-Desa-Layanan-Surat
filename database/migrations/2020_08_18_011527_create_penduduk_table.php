<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->string('nik')->primary()->unique();
            $table->string('no_kk');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('status');
            $table->string('status_keluarga');
            $table->string('golongan_darah')->nullable();
            $table->string('kewarganegaraan');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('email')->unique()->nullable();
            $table->string('no_hp')->unique()->nullable();
            $table->foreign('no_kk')->references('no_kk')->on('KK')->onDelete('cascade');
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
        Schema::dropIfExists('penduduk');
    }
}
