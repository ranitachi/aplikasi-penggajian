<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBatchGaji extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batch_gaji', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('bank');
            $table->string('no_rekening');
            $table->string('periode_perhitungan');
            $table->integer('hari_masuk');
            $table->integer('id_user');
            $table->datetime('tanggal_bayar')->nullable();
            //1. sudah, 0. blm
            $table->string('status')->default(1);
            $table->integer('flag')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batch_gaji');

    }
}
