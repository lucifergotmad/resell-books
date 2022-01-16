<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt_penjualan_detail', function (Blueprint $table) {
            $table->id();
            $table->string('no_penjualan');
            $table->string('kode_buku');
            $table->double('berat');
            $table->integer('qty');
            $table->double('harga_jual');
            $table->timestamps();

            $table->foreign('no_penjualan')->references('no_penjualan')->on('tt_penjualan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tt_penjualan_detail');
    }
}
