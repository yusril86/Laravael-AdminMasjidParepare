<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MimbarJumatController extends Controller
{
    public function tampilData(){
        $mimbar = DB::table('mimbar')->get();
        return view('mimbar.data',['mimbar'=>$mimbar]);
    }

    public function tambah(){
        return view('mimbar.add');
    }

    public function tambahProses(Request $request)
    {
        DB::table('mimbar')->insert([
            'nama_berita' => $request->nama,
            'deskripsi' =>$request->deskripsi,
            'tgl_berita'=> $request->tanggal
        ]);

        return  redirect('admin/mimbar')->with('status','Data Berhasil Ditambah');
    }
    public function edit($id)
    {
        $data = DB::table('mimbar')->where('id',$id)->first();
        return view('mimbar/edit' ,compact('data'));
    }

    public function editProses(Request $request ,$id)
    {

        DB::table('berita')->where('id',$id)
        ->update([
            'nama_berita' => $request->nama,
            'deskripsi' =>$request->deskripsi,
            'tgl_berita'=> $request->tanggal
        ]);
        return  redirect('admin/mimbar')->with('status','Data Berhasil Diubah');
    }
    public function delete($id)
    {
        DB::table('mimbar')->where('id',$id)->delete();

        return redirect('admin/mimbar')->with('status','Data Berhasil Dihapus!'); 
    }
    public function api ()
    {
        $mimbar = DB::table('mimbar')->get();
        return response()->json($mimbar);
    }
        
}
