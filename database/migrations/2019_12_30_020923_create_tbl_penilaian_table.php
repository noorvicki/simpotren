<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPenilaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_penilaian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_santri');
            $table->integer('id_mapel');
            $table->integer('nilai_tugas');
            $table->integer('nilai_uts');
            $table->integer('nilai_uas');
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
        Schema::dropIfExists('tbl_penilaian');
    }
}
