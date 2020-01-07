<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datakelas extends Model
{
    protected $table ="tbl_data_kelas";
	protected $fillable=[
		'id',
		'nama_kelas',
		'jumlah_santri'
	];
}
