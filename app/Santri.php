<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    
	protected $table = "tbl_santri";

    protected $fillable=[
		
		'id',
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		'jenis_kelamin',
		'alamat',
		'telepon',
		'asal_sekolah',
		'id_wali',
		'foto'


	];

}
