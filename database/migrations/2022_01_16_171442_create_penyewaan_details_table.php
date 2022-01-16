<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewaanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt_penyewaan_detail', function (Blueprint $table) {
            $table->id();
            $table->string('no_sewa');
            $table->string('kode_buku');
            $table->double('berat');
            $table->integer('qty');
            $table->integer('hari');
            $table->double('harga_jual');
            $table->timestamps();

            $table->foreign('no_sewa')->references('no_sewa')->on('tt_penyewaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tt_penyewaan_detail');
    }
}
