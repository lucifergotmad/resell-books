<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_kota', function (Blueprint $table) {
            $table->id();
            $table->string('kode_provinsi');
            $table->string('kode_kota')->unique();
            $table->string('nama_kota');
            $table->timestamps();

            $table->foreign('kode_provinsi')->references('kode_provinsi')->on('tm_provinsi');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_kota');
    }
}
