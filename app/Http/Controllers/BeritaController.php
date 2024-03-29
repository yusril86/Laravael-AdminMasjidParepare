<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class BeritaController extends Controller
{
    public function tampil()
    {
       $berita = DB::table('berita')->paginate(5);
        return view('berita.data',['berita' => $berita]);
    }

    public function tambah()
    {
        return view('berita.add');
    }

    public function tampilgambar($id)
    {
        $berita = DB::table('berita')->where('id',$id)->first();
        // dd($berita);
        return view('berita/showphoto' ,compact('berita'));
    }

    public function tambahProses(Request $request)
    {
        $image = time().'.'.$request-> file->extension();
        $request ->file->move(public_path('berita'),$image) ;

        DB::table('berita')->insert([
            'nama_berita' => $request->nama,
            'deskripsi' =>$request->deskripsi,
            'tgl_berita'=> $request->tanggal,
            'file' => $image
            // 'file' => $request->file('file')->store('files')
        ]);

        return redirect('admin/berita')->with('status','Data Berhasil Ditambah');
    }

    public function edit($id)
    {
        $data = DB::table('berita')->where('id',$id)->first();
        return view('berita/edit' ,compact('data'));
    }

    public function editProses(Request $request ,$id)
    {
        
        if ($request->file('file'))
        {
            Storage::delete('files/'.$request->file('file'));
        }

        // $image= $request->file('file')->store('files');
        $image = time().'.'.$request-> file->extension();
        $request ->file->move(public_path('berita'),$image) ;

        DB::table('berita')->where('id',$id)
        ->update([
            'nama_berita' => $request->nama,
            'deskripsi' =>$request->deskripsi,
            'tgl_berita'=> $request->tanggal,
            'file' =>$image
        ]);

        return redirect('admin/berita')->with('status','Data Berhasil Diubah!');
    }

    public function delete($id)
    {
        DB::table('berita')->where('id',$id)->delete();

        return redirect('admin/berita')->with('status','Data Berhasil Dihapus!'); 
    }

    public function cari(Request $request)
    {
	// menangkap data pencarian
	$cari = $request->cari;
 
 	// mengambil data dari table berita sesuai pencarian data
	$berita = DB::table('berita')
	->where('nama_berita','like',"%".$cari."%")
	->paginate();
 
    	// mengirim data berita ke view index
    return view('berita.data',['berita' => $berita]);
    }

    public function api ()
    {
        $berita = DB::table('berita')->get();
        return response()->json($berita);
    }
}
