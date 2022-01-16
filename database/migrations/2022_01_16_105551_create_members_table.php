<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_member', function (Blueprint $table) {
            $table->id();
            $table->string('kode_member');
            $table->string('no_ktp');
            $table->string('no_hp');
            $table->string('nama_member');
            $table->date('tanggal_lahir');
            $table->integer('poin');
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
        Schema::dropIfExists('tm_member');
    }
}
