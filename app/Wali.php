<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    

	protected $table = "tbl_wali";

	protected $fillable = [

		'id',
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		'jenis_kelamin',
		'alamat',
		'telepon',
		'pekerjaan'

	];

}
