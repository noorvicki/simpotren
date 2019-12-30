<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCalonSantriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_calon_santri', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 191);
            $table->string('tempat_lahir', 191);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin', 191);
            $table->text('alamat');
            $table->string('telepon', 191);
            $table->string('asal_sekolah', 191);
            $table->integer('id_wali');
            $table->string('foto', 191);
            $table->integer('nilai');
            $table->string('keterangan', 191);
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
        Schema::dropIfExists('tbl_calon_santri');
    }
}
