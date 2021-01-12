<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    
    public function tampil()
    {
        $data = DB::table('info')->get();

        return view('info.data',['info'=>$data]);
    }

    public function tambah ()
    {
        return view('info.add');
    }

    public function tambahProses(Request $request)
    {
        DB::table('info')
        ->insert([
            'nama'=>$request->nama,
            'deskripsi'=>$request->deskripsi,
            'tgl_pembaruan'=>$request->tanggal,
            'logo' => $request->file('logo')->store('logos')
        ]);

        return redirect('admin/info')->with('status','Data Berhasil ditambahkan');
    }

    public function edit($id)
    {
        $info = DB::table('info')->where('id',$id)->first();
        return view('info.edit',compact('info'));
        
    }

    public function editProses(Request $request,$id)
    {
        /* if ($request->file('logo'))
        {
            Storage::delete('logos/'.$request->file('logo'));
        } */

        /* $image= $request->file('logo')->store('logos'); */
        DB::table('info')->where('id',$id)
        ->update([
            'nama_kontak'=>$request->nama_kontak,
            'no_hp'=>$request->no_hp
            // 'tgl_pembaruan'=>$request->tanggal,
           /*  'logo'=>$request->$image */
        ]);

        return redirect('admin/info')->with('status','Data Berhasil Diubah');
    }

    public function hapus($id)
    {
        DB::table('info')->where('id',$id)->delete();

        return redirect ('admin/info')->with('status','Data Berhsil Dihapus!');
    }

    public function tampilgambar($id)
    {
        $info = DB::table('info')->where('id',$id)->first();
        return view('info/showphoto' ,compact('info'));
    }

    public function api ()
    {
        $info = DB::table('info')->get();
        return response()->json($info);
    }
    

}
