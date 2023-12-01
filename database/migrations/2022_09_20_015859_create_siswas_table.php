<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_siswa' ,5);
            $table->string('nama_siswa' ,40);
            $table->string('nisn' ,10);
            $table->string('jenis_kelamin' ,10);
            $table->string('alamat' ,40);
            $table->string('telepon' ,13);
            $table->string('tempat_lahir' ,30);
            $table->date('tanggal_lahir');
            $table->string('email' ,40);
            $table->string('asal_sekolah' ,30);
            $table->string('angkatan' ,15);
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
        Schema::dropIfExists('siswas');
    }
};
