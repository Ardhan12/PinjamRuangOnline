<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gedung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gedung', function (Blueprint $table) {
            $table->increments('gedung_id');
            $table->string('pj_id');
            $table->string('ruang_id');
            /*$table->string('pj_id')->unsigned();
            $table->foreign('pj_id')->references('pj_id')->on('p_j');
            $table->string('ruang_id')->unsigned();
            $table->foreign('ruang_id')->references('ruang_id')->on('ruang');
            */
            $table->string('nama_gedung');
            $table->string('jml_ruangan');
            $table->integer('cp_gedung');
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
        Schema::dropIfExists('gedung');
    }
}
