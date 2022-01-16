<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenggatSewaDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('th_tenggat_sewa_detail', function (Blueprint $table) {
            $table->id();
            $table->string('no_sewa');
            $table->string('kode_buku');
            $table->date('awal_sewa');
            $table->date('tenggat_sewa');
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
        Schema::dropIfExists('th_tenggat_sewa_detail');
    }
}
