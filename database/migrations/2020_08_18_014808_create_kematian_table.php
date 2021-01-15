<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKematianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kematian', function (Blueprint $table) {
            $table->string('no_kematian')->primary()->unique();
            $table->string('tempat_meninggal');
            $table->date('tgl_meninggal');
            $table->integer('umur');
            $table->string('sebab');
            $table->string('tempat_makam');
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
        Schema::dropIfExists('kematian');
    }
}
