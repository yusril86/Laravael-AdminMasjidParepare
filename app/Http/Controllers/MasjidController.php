<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasjidController extends Controller
{
    public function tampilData()
    {
       $masjid = DB::table('masjid')->paginate(10);

       return view('masjid.data', ['masjid' => $masjid]);
    }

    public function tambahData()
    {
        return view('masjid.add');
    }

    public function tambahProses(Request $request)
    {
        DB::table('masjid')->insert([
            'nama_masjid' => $request->nama,
            'alamat_masjid' => $request->alamat,
            'nama_pengurus' => $request->namaPengurus, 
            'no_pengurus' => $request->nomorPengurus, 
            'koordinat' => $request->koordinat 
        ]);
        return redirect('masjid')->with('status', 'Data Berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = DB::table('masjid')->where('id',$id)->first();
        return view('masjid/edit',compact('data'));
    }

    public function editProses(Request $request, $id)
    {
          DB::table('masjid')->where('id',$id)
         ->update([
            'nama_masjid' => $request->nama,
            'alamat_masjid' => $request->alamat,
            'nama_pengurus' => $request->namaPengurus, 
            'no_pengurus' => $request->nomorPengurus, 
            'koordinat' => $request->koordinat 
         ]);
            
         return redirect('masjid')->with('status', 'Data Berhasil ubah!');
    }

    public function delete($id)
    {
        DB::table('masjid')->where('id',$id)->delete();
        return redirect('masjid')->with('status', 'Data Berhasil Dihapus!');
    }


    public function api()
    {
        $masjid = DB::table('masjid')->get();
        return response()->json($masjid);
    }
}
