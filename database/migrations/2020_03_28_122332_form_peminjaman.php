<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormPeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_peminjaman', function (Blueprint $table) {
            $table->increments('booking_id');
            $table->string('user_id');
            $table->string('gedung_id');
            /*$table->string('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('user');
            $table->string('gedung_id')->unsigned();
            $table->foreign('gedung_id')->references('gedung_id')->on('gedung');
            */
            $table->string('nama_gedung');
            $table->string('ruang_id');
            //$table->string('ruang_id')->unsigned();
            //$table->foreign('ruang_id')->references('ruang_id')->on('ruang');
            $table->string('nama_ruang');
            $table->integer('npm');
            $table->binary('foto_ktm');
            $table->binary('surat');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_booking');
            $table->integer('cp_user');
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
        Schema::dropIfExists('form_peminjaman');
    }
}
