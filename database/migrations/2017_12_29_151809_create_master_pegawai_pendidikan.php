<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterPegawaiPendidikan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_pegawai_pendidikan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('pendidikan_akhir')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('tahun_kelulusan')->nullable();
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
        Schema::dropIfExists('master_pegawai_pendidikan');
    }
}
