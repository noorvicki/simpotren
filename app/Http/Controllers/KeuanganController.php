<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Santri;
use App\Keuangan;
class KeuanganController extends Controller
{
    public function index(){
	  	// mengambil semua data pengguna
		$santri = Santri::all();
		// return data ke view
		return view('pembayaran.laporan_pembayaran', ['santri' => $santri]);
	}
}
