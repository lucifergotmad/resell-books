<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt_penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('no_penjualan')->unique();
            $table->string('kode_member');
            $table->date('tanggal');
            $table->double('total_berat');
            $table->integer('total_qty');
            $table->double('total_harga');
            $table->integer('diskon');
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
        Schema::dropIfExists('tt_penjualan');
    }
}
