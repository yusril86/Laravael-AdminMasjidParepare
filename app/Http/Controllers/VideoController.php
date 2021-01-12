<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{

    public function tampil()
    {
        $video = DB::table('video')->paginate(5);

        return view('video.data',['video'=>$video]);
    }

    public function add()
    {
        return view('video.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('video')
        ->insert([
            'judul'=>$request->judul,
            'link'=>$request->link
        ]);
        return redirect('admin/video')->with('status','Data Berhasil Ditambahkan !!');
    }

    public function edit($id)
    {
        $video = DB::table('video')->where('id',$id)->first();
        return view('video/edit',compact('video'));
    }

    public function editProses(Request $request,$id)
    {
        DB::table('video')->where('id',$id)
        ->update([
            'judul' => $request->judul,
            'link'=>$request->link
        ]);
        return redirect('admin/video')->with('status','Data Berhasil Diubah !!');
    }

    public function delete($id)
    {
        DB::table('video')->where('id',$id)->delete();
        return redirect('admin/video')->with('status', 'Data Berhasil Dihapus!');
    }

    public function api ()
    {
        $video = DB::table('video')->get();
        return response()->json($video);
    }
}
