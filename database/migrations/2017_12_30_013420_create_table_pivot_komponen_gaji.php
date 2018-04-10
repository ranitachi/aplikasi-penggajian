<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePivotKomponenGaji extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_komponen_gaji', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_komponen');
            $table->integer('id_batch_gaji');
            $table->double('nominal')->default(0);
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
        Schema::dropIfExists('pivot_komponen_gaji');

    }
}
