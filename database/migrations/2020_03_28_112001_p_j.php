<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PJ extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_j', function (Blueprint $table) {
            $table->increments('pj_id');
            $table->string('Nama_lengkap');
            $table->string('username');
            $table->string('password');
            $table->string('emailpj');
            $table->string('idgedung');
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
        Schema::dropIfExists('p_j');
    }
}
