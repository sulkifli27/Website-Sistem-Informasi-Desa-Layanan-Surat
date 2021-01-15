<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendatangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendatang', function (Blueprint $table) {
            $table->string('no_datang')->unique()->primary();
            $table->date('tgl_datang');
            $table->string('asal');
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
        Schema::dropIfExists('pendatang');
    }
}
