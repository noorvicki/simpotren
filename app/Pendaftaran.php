<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    
    protected $table = "tbl_calon_santri";

    protected $fillable=[
		
		'nama',
		'tempat_lahir',
		'tanggal_lahir',
		'jenis_kelamin',
		'alamat',
		'telepon',
		'asal_sekolah',
		'id_wali',
		'foto',
		'nilai',
		'keterangan'


	];

}
