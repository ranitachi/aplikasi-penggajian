<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterPotongan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_potongan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('desc')->nullable();
            $table->double('nominal')->default(0);
            $table->date('tgl_ambil')->nullable();
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
        Schema::dropIfExists('master_potongan');

    }
}
