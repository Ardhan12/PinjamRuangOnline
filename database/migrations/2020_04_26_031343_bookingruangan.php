<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookingruangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name_organisasi');
            $table->string('nama_gedung');
            $table->string('nama_ruang');
            $table->integer('npm');
            $table->string('name');
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
