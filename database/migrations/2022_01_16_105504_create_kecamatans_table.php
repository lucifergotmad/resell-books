<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKecamatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_kecamatan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kota');
            $table->string('kode_kecamatan')->unique();
            $table->string('nama_kecamatan');
            $table->timestamps();

            $table->foreign('kode_kota')->references('kode_kota')->on('tm_kota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_kecamatan');
    }
}
