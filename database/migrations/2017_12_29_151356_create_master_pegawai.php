<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->integer('id_jabatan')->nullable();
            $table->text('alamat')->nullable();
            $table->string('email')->nullable();
            $table->string('telp')->nullable();
            $table->string('npwp')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('no_kk')->nullable();
            $table->integer('id_bank')->nullable();
            $table->string('no_rekening')->nullable();
            $table->date('tgl_masuk')->nullable();
            //0 - belum, 1 - sudah, 2 - cerai
            $table->integer('status_pernikahan')->nullable();

            //0 - tetap, 1 - kontrak, 2 - yayasan
            $table->integer('status_kerja')->default(0);
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
        Schema::dropIfExists('master_pegawai');
        
    }
}
