<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratkm', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_surat')->nullable();
            $table->string('nik');
            $table->string('kk');
            $table->string('nama');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->string('pekerjaan');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('pelapor');
            $table->string('keterangan')->nullable();
            $table->enum('status', ['Approve', 'Cancel']);
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('suratkm');
    }
}
