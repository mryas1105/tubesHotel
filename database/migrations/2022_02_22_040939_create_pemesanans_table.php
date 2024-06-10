<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_cek_in');
            $table->date('tanggal_cek_out');
            $table->string('jumlah_kamar');
            $table->string('nama_pemesan');
            $table->string('email');
            $table->string('no_telp');
            $table->string('nama_tamu');
            $table->string('tipe_kamar');
            $table->string('status')->default('booking');
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
        Schema::dropIfExists('pemesanans');
    }
}
