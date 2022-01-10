<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
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
            // $table->unsignedBigInteger('mobil_id');
            // $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('sopir_id');
            $table->string('kode_booking');
            $table->string('tgl_booking');
            $table->string('tgl_mulai');
            $table->string('tgl_selesai');
            $table->string('tgl_kembali');
            $table->string('denda');
            $table->string('durasi');
            $table->string('status_booking');
            $table->string('jml_bayar');
            $table->string('jml_dp');
            $table->timestamps();

            // $table->foreign('mobil_id')->references('id')->on('mobils');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('sopir_id')->references('id')->on('sopirs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
