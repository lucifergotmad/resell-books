<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku')->unique();
            $table->string('judul_buku')->unique();
            $table->string('kode_kategori');
            $table->string('pengarang');
            $table->double('berat');
            $table->double('harga_jual');
            $table->double('harga_sewa');
            $table->string('penerbit');
            $table->string('tahun_terbit');
            $table->timestamps();

            $table->foreign('kode_kategori')->references('kode_kategori')->on('tm_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_buku');
    }
}
