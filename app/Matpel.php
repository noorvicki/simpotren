<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matpel extends Model
{
    protected $table ="tbl_mata_pelajaran";
	protected $fillable=[
		'id',
        'nama_mapel',
        'golongan_mapel',
        'kitab',
        'id_pengajar'
	];
}
