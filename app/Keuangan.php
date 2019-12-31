<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = "tbl_keuangan";
 
    public function pengguna()
    {
    	return $this->belongsTo('App\Santri','id');
    }
}
