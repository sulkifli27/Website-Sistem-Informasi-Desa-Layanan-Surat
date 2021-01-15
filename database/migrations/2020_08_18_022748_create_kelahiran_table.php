<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelahiranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelahiran', function (Blueprint $table) {
            $table->string('no_kelahiran')->primary()->unique();
            $table->string('nama_bayi');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->decimal('berat', 3, 2);
            $table->string('jenis_kelamin');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat');
            $table->string('nama_pelapor')->nullable();
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
        Schema::dropIfExists('kelahiran');
    }
}
