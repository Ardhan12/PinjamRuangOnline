<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ruangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ruangan', function (Blueprint $table) {
            $table->increments('ruang_id');
           /* $table->unsignedInteger('gedung_id')->nullable();
            $table->string('gedung_id')->unsigned();
            $table->foreign('gedung_id')->references('gedung_id')->on('gedung');
           */
            $table->string('gedung_id');
            $table->string('nama_ruangan');
            $table->integer('kapasitas');
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
        Schema::dropIfExists('ruangan');
    }
}
