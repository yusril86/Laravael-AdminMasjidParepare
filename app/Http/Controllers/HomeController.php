<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $penceramah = DB::table('penceramah')->get()->count();
        $masjid = DB::table('masjid')->get()->count();
        $berita = DB::table('berita')->get()->count();
        $video = DB::table('video')->get()->count();
        return view('admin.home',compact('penceramah','masjid','berita','video'));
    }

   
}
