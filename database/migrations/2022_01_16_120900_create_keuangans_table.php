<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeuangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_keuangan', function (Blueprint $table) {
            $table->id();
            $table->string('no_rekening')->unique();
            $table->double('saldo');
            $table->timestamps();

            $table->foreign('no_rekening')->references('no_rekening')->on('tm_rekening');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_keuangan');
    }
}
