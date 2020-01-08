<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matpel;
use App\Pengajar;
use Illuminate\Support\Facades\DB;
class MatpelController extends Controller
{
    public function index()
    {
        $matpel = Matpel::all();
        $pengajar = Pengajar::all();
        return view('akademik.mata_pelajaran', ['matpel' => $matpel,'pengajar'=>$pengajar]);
    }
    public function store(Request $request)
    {
        Matpel::create([
            'id' => $request->ID,
            'nama_mapel' => $request->mapel,
            'golongan_mapel' => $request->golmapel,
            'kitab' => $request->kitab,
            'id_pengajar' => $request->pengajar

        ]);
        return redirect('/mata_pelajaran');
    }
    public function hapus($id)
    {
        Matpel::find($id)->delete();
        return redirect('/mata_pelajaran');
    }
    public function update(Request $request)
    {
        // update data mapel
        DB::table('tbl_mata_pelajaran')->where('id', $request->ID)->update([
            'nama_mapel' => $request->mapel,
            'golongan_mapel' => $request->golmapel,
            'kitab' => $request->kitab,
            'id_pengajar' => $request->pengajar
        ]);
        // alihkan halaman ke halaman data mapel
        return redirect('/mata_pelajaran');
    }
}
