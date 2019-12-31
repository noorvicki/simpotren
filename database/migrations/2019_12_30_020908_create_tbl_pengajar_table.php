<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPengajarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pengajar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 191);
            $table->text('alamat');
            $table->string('telepon', 191);
            $table->string('bidang_ajar', 191);
            $table->string('jenis kelamin', 191);
            $table->string('foto', 191);
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
        Schema::dropIfExists('tbl_pengajar');
    }
}
