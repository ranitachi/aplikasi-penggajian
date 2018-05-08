<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKontraksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kontrak', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('karyawan_id');
            $table->date('tgl_awal_kontrak');
            $table->date('tgl_akhir_kontrak');
            $table->integer('status_kontrak');
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
        Schema::dropIfExists('data_kontraks');
    }
}
