<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id('id_pasien');
            $table->string('nama');
            $table->string('alamat');
            $table->bigInteger('telp');
            $table->integer('rt');
            $table->integer('rw');
            $table->unsignedBigInteger('kelurahan_id');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->timestamps();

            $table->foreign('kelurahan_id')->references('id')->on('kelurahans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};
