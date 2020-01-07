<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datakelas;
use Illuminate\Support\Facades\DB;
class DatakelasController extends Controller
{
    public function index()
    {
        $datakelas = Datakelas::all();
        return view('akademik.data_kelas', ['datakelas' => $datakelas]);
    }
    public function store(Request $request)
    {
        Datakelas::create([
            'id' => $request->ID,
            'nama_kelas' => $request->namakelas,
            'jumlah_santri' => $request->jumlahsantri
        ]);
        return redirect('/data_kelas');
    }
    public function hapus($id)
    {
        Datakelas::find($id)->delete();
        return redirect('/data_kelas');
    }
    public function update(Request $request)
    {
        // update data kelas
        DB::table('tbl_data_kelas')->where('id', $request->ID)->update([
            'nama_kelas' => $request->namakelas,
            'jumlah_santri' => $request->jumlahsantri
        ]);
        // alihkan halaman ke halaman data kelas
        return redirect('/data_kelas');
    }
}
