<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaldoAwalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt_saldo_awal_detail', function (Blueprint $table) {
            $table->id();
            $table->string('no_transaksi');
            $table->string('kode_buku');
            $table->string('judul_buku');
            $table->string('pengarang');
            $table->double('berat');
            $table->integer('qty');
            $table->double('harga_beli');
            $table->string('kategori');
            $table->string('penerbit');
            $table->string('tahun_terbit');
            $table->timestamps();

            $table->foreign('no_tranksasi')->references('no_transaksi')->on('tt_saldo_awal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tt_saldo_awal_detail');
    }
}
