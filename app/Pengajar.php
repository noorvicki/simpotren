<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
	protected $table ="tbl_pengajar";
	protected $fillable=[
		'id',
		'nama',
		'alamat',
		'telepon',
		'bidang_ajar',
		'jenis_kelamin',
		'foto'
	];
}
