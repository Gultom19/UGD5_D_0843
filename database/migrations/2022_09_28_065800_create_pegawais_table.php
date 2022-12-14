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
Schema::create('pegawais', function (Blueprint $table) {
    $table->string('nomor_induk_pegawai');
    $table->string('nama_pegawai');
    $table->id('id_departemen');
    $table->string('email');
    $table->integer('telepon');
    $table->boolean('gender');
    $table->boolean('status');
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
        Schema::dropIfExists('pegawais');
    }
};
