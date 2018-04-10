<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHarilibursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hariliburs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tanggal')->default(0);
            $table->integer('bulan')->default(0);
            $table->integer('tahun')->default(0);
            $table->string('hari_libur')->nullable();
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hariliburs');
    }
}
