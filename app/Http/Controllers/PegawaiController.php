<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pegawai;
use Illuminate\Support\Facades\DB;
class PegawaiController extends Controller
{
    public function index(){
    	$pegawai = Pegawai::all();
	 	return view('kepegawaian.data_non_pengajar',['pegawai'=>$pegawai]);
    }
 	public function store(Request $request){
    	Pegawai::create([
		'id'=>$request->NIP,
		'nama'=>$request->nama,
		'alamat'=>$request->alamat,
		'telepon'=>$request->nomorHp,
		'staff_bagian'=>$request->bidang,
		'jenis_kelamin'=>$request->jk
    	]);
    	return redirect('/data_pegawai');
    }
    public function hapus($id){
		Pegawai::find($id)->delete();
    	return redirect ('/data_pegawai');
    }
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('tbl_pegawai')->where('id',$request->NIP)->update([
        'nama'=>$request->nama,
        'alamat'=>$request->alamat,
        'telepon'=>$request->nomorHp,
        'staff_bagian'=>$request->bidang,
        'jenis_kelamin'=>$request->jk
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/data_pegawai');
    }
}
