<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajar;
use App\Pelajaran;
use Illuminate\Support\Facades\DB;
class PengajarController extends Controller
{
    public function index(){
    	$pengajar = Pengajar::all();
    	$ajar = Pelajaran::all();
	 	return view('kepegawaian.data_pengajar',['pengajar'=>$pengajar,'ajar'=>$ajar]);
    }
 	public function store(Request $request){
    	Pengajar::create([
		'id'=>$request->NIP,
		'nama'=>$request->nama,
		'alamat'=>$request->alamat,
		'telepon'=>$request->nomorHp,
		'bidang_ajar'=>$request->bidang,
		'jenis_kelamin'=>$request->jk
    	]);
    	return redirect('/data_pengajar');
    }
}
