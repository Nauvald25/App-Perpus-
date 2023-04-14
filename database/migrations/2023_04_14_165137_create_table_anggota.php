<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('table_anggota', function (Blueprint $table) {
            $table->bigIncrements('id_anggota');


            $table->string('nama_anggota',50);


            $table->string('jenis_kelamin',50);


            $table->string('alamat');


            $table->string('email',50);


            $table->string('no_telp',20);


            $table->timestamps();


            });


            }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_anggota');
    }
};
