<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;
use App\Keuangan;
class KeuanganController extends Controller
{
    public function index(){
    	$Santri=Santri::all();
	  	// mengambil semua data keuangan
		$keuangan = Keuangan::all();
		// return data ke view
		return view('pembayaran.laporan_pembayaran', ['keuangan' => $keuangan,'santri'=>$Santri]);
	}
	public function store(Request $request){
		Keuangan::create([
			'tanggal_bayar'=>$request->tanggal,
			'periode'=>$request->periode,
			'id_santri'=>$request->nis,
			'jumlah'=>$request->total,
			'keterangan'=>$request->keterangan
	    ]);
    	return redirect('/laporan_pembayaran');
	}
	public function hapus($id)
    {
        Keuangan::find($id)->delete();
        return redirect('/laporan_pembayaran');
    }
}
