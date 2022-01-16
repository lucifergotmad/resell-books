<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_stock_buku', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku')->unique();
            $table->integer('total_qty');
            $table->double('total_berat');
            $table->timestamps();

            $table->foreign('kode_buku')->references('kode_buku')->on('tm_buku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_stock_buku');
    }
}
