<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMataPelajaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_mata_pelajaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_mapel', 191);
            $table->string('golongan_mapel', 191);
            $table->string('kitab', 191);
            $table->integer('id_pengajar');
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
        Schema::dropIfExists('tbl_mata_pelajaran');
    }
}
