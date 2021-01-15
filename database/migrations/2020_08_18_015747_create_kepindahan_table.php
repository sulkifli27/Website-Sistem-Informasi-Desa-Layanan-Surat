<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepindahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepindahan', function (Blueprint $table) {
            $table->string('no_pindah')->primary()->unique();
            $table->date('tanggal_pindah');
            $table->string('keterangan')->nullable();
            $table->string('nik')->unique();
            $table->foreign('nik')->references('nik')->on('penduduk')->onDelete('cascade');
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
        Schema::dropIfExists('kepindahan');
    }
}
