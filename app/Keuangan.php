<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = "tbl_keuangan";
 	protected $fillable=[
			'tanggal_bayar',
			'periode',
			'id_santri',
			'jumlah',
			'keterangan'
	];
    public function pengguna()
    {
    	return $this->belongsTo('App\Santri','id_santri');
    }
}
