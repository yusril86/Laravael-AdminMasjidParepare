<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    public function tampilgambar($id)
    {
        $masjid = DB::table('masjid')->where('id',$id)->first();
        // dd($berita);
        return view('masjid/showphoto',compact('masjid'));
    }

    public function tambahProses(Request $request)
    {
        $image = time().'.'.$request-> gambar->extension();
        $request ->gambar->move(public_path('masjid'),$image) ;
        DB::table('masjid')->insert([
            'nama_masjid' => $request->nama,
            'alamat_masjid' => $request->alamat,
            'nama_pengurus' => $request->namaPengurus, 
            'no_pengurus' => $request->nomorPengurus, 
            'koordinat' => $request->koordinat, 
            'kelurahan' => $request->kelurahan, 
            'kecamatan' => $request->kecamatan, 
            'gambar' => $image
            // 'gambar' => $request->file('gambar')->store('masjid')
        ]);
        return redirect('admin/masjid')->with('status', 'Data Berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = DB::table('masjid')->where('id',$id)->first();
        return view('masjid/edit',compact('data'));
    }

    public function editProses(Request $request, $id)
    {
        if ($request->file('gambar'))
        {
            Storage::delete('masjid/'.$request->file('gambar'));
        }

        // $image= $request->file('gambar')->store('masjid');
        $image = time().'.'.$request-> file->extension();
        $request ->file->move(public_path('masjid'),$image) ;

          DB::table('masjid')->where('id',$id)
         ->update([
            'nama_masjid' => $request->nama,
            'alamat_masjid' => $request->alamat,
            'nama_pengurus' => $request->namaPengurus, 
            'no_pengurus' => $request->nomorPengurus, 
            'koordinat' => $request->koordinat, 
            'kelurahan' => $request->kelurahan, 
            'kecamatan' => $request->kecamatan,
            'gambar' => $image 
         ]);
            
         return redirect('admin/masjid')->with('status', 'Data Berhasil ubah!');
    }

    public function delete($id)
    {
        DB::table('masjid')->where('id',$id)->delete();
        return redirect('admin/masjid')->with('status', 'Data Berhasil Dihapus!');
    }


    public function api()
    {
        $masjid = DB::table('masjid')->get();
        return response()->json($masjid);
    }
}
