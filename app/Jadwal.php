<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table ="tbl_jadwal_pelajaran";
    
    protected $fillable=[
        'id',
        'nama_matpel',
        'kitab',
        'nama',
		'hari',
        'jam',
        'kelas'
	];
}
