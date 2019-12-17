<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pendaftaran;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    
	public function index(){
    	$calon_santri = Pendaftaran::all();
	 	return view('pendaftaran.pendaftaran',['calon_santri'=>$calon_santri]);
    }


    public function edit(Request $request){

    	$pendaftaran = Pendaftaran::find($request->id);

    	$pendaftaran->nama = $request->namaCalonSantri;
    	$pendaftaran->nilai = $request->nilai;
    	$pendaftaran->keterangan = $request->keterangan;
    	$pendaftaran->save();

    	return redirect('/pendaftaran');

    }


    public function hapus(Request $request){

    	$pendaftaran = Pendaftaran::find($request->id);

    	$pendaftaran->delete();

    	return redirect('/pendaftaran');

    }


}
