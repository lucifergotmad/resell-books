<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_rekening', function (Blueprint $table) {
            $table->id();
            $table->string('kode_bank');
            $table->string('no_rekening');
            $table->string('atas_nama');
            $table->timestamps();

            $table->foreign('kode_bank')->references('kode_bank')->on('tm_bank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_rekening');
    }
}
