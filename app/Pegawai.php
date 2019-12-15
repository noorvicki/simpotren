<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
	protected $table ="tbl_pegawai";
	protected $fillable=[
		'id',
		'nama',
		'alamat',
		'telepon',
		'staff_bagian',
		'jenis_kelamin',
		'foto'
	];
}
