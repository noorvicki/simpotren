<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKeuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_keuangan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_bayar');
            $table->string('periode', 191);
            $table->integer('jumlah');
            $table->string('keterangan', 191);
            $table->integer('id_santri');
            $table->integer('pengeluaran');
            $table->integer('pemasukan');
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
        Schema::dropIfExists('tbl_keuangan');
    }
}
