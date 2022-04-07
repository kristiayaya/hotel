<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id('id');
            $table->date('tgl_cekin');
            $table->date('tgl_cekout');
            $table->integer('id_user'); 
            $table->integer('jml_kamar');
            $table->string('email');
            $table->string('no_hp');
            $table->string('nama_pemesan');
            $table->string('nama_tamu');
            $table->string('tipe_kamar');
            $table->string('status');
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
        Schema::dropIfExists('reservasi');
    }
}
