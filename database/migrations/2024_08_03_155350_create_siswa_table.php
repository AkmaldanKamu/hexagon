<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('nama_depan', 255);
            $table->string('nama_belakang', 255);
            $table->text('alamat');
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');
            $table->string('telepon', 20);
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('orangtua_id');
            $table->timestamps();

            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
     
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');

           
            $table->foreign('orangtua_id')->references('id')->on('orangtua')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
