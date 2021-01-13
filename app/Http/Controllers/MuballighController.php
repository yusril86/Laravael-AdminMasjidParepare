<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MuballighController extends Controller
{
    public function data ()
    {
        $penceramah = DB::table('penceramah')->paginate(5);
        // return $penceramah;

        return view('muballigh.data', ['penceramah' => $penceramah]);
    }


    public function add ()
    {
        return view('muballigh.add');
    }



    public function addProcess(Request $request)
    {
        DB::table('penceramah')->insert([
            'nama_penceramah' => $request->nama,
            'nomor_telepon_penceramah' => $request->nomor,
            'alamat_penceramah' => $request->alamat, 
            'jenis_acara' => $request->jenisAcara 
        ]);
        return redirect('admin/muballigh')->with('status', 'Data Berhasil ditambahkan!');
    }




    public function edit($id)
    {
        $data = DB::table('penceramah')->where('id', $id)->first();
        return view('muballigh/edit',compact('data'));
    }



    public function editProcess(Request $request, $id)
    {
        DB::table('penceramah')->where('id', $id)
        ->update([
            'nama_penceramah' => $request->nama,
            'nomor_telepon_penceramah' => $request->nomor,
            'alamat_penceramah' => $request->alamat,
            'jenis_acara' => $request->jenisAcara 
        ]);
       return redirect('admin/muballigh')->with('status', 'Data Berhasil Diubah!');
    }



    public function delete($id)
    {
        DB::table('penceramah')->where('id', $id)->delete();
        return redirect('admin/muballigh')->with('status', 'Data Berhasil Dihapus!');
    }

    public function cari(Request $request)
    {
	// menangkap data pencarian
	$cari = $request->cari;
 
 	// mengambil data dari table berita sesuai pencarian data
	$penceramah = DB::table('penceramah')
	->where('nama_penceramah','like',"%".$cari."%")
	->paginate();
 
    	// mengirim data berita ke view index
    return view('muballigh.data',['penceramah' => $penceramah]);
    }

    public function api ()
    {
        $penceramah = DB::table('penceramah')->get();
        return response()->json($penceramah);
    }


}
