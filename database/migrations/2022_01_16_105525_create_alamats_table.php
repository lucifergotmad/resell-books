<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlamatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_alamat', function (Blueprint $table) {
            $table->id();
            $table->string('kode_member');
            $table->string('alamat');
            $table->string('kode_provinsi');
            $table->string('kode_kota');
            $table->string('kode_kecamatan');
            $table->string('kode_pos');
            $table->timestamps();

            $table->foreign('kode_provinsi')->references('kode_provinsi')->on('tm_provinsi');
            $table->foreign('kode_kota')->references('kode_kota')->on('tm_kota');
            $table->foreign('kode_kecamatan')->references('kode_kecamatan')->on('tm_kecamatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_alamat');
    }
}
