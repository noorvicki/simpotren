<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = "tbl_santri";
 
    public function keuangan()
    {
    	return $this->hasOne('App\Keuangan','id_santri');
    }
}
