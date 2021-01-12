<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

/* Route::get('home', function () {
    return view('admin.home');
}); */




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group( ['prefix' => 'admin', 'middleware' => ['auth']],function()
{
//Penceramah
Route::get('/muballigh', 'MuballighController@data');
Route::get('/muballigh/add', 'MuballighController@add');
Route::post('/muballigh', 'MuballighController@addProcess');
Route::get('/muballigh/edit/{id}', 'MuballighController@edit');
Route::patch('/muballigh/{id}', 'MuballighController@editProcess');
Route::delete('/muballigh/{id}', 'MuballighController@delete');

// Masjid
Route::get('/masjid','MasjidController@tampilData');
Route::get('/masjid/add','MasjidController@tambahData');
Route::get('/masjid/showphoto/{id}','MasjidController@tampilgambar');
Route::post('/masjid','MasjidController@tambahProses');
Route::get('/masjid/edit/{id}','MasjidController@edit');
Route::patch('/masjid/{id}', 'MasjidController@editProses');
Route::delete('/masjid/{id}', 'MasjidController@delete');

//Berita
Route::get('/berita','BeritaController@tampil');
Route::get('/berita/add','BeritaController@tambah');
Route::get('/berita/showphoto/{id}','BeritaController@tampilgambar');
Route::post('/berita','BeritaController@tambahProses');
Route::get('/berita/edit/{id}','BeritaController@edit');
Route::patch('/berita/{id}','BeritaController@editProses');
Route::delete('/berita/{id}','BeritaController@delete');

//Video
Route::get('/video','VideoController@tampil');
Route::get('/video/add','VideoController@add');
Route::post('/video','VideoController@addProcess');
Route::get('/video/edit/{id}','VideoController@edit');
Route::patch('/video/{id}','VideoController@editProses');
Route::delete('/video/{id}','VideoController@delete');

//Info
Route::get('/info','InfoController@tampil');
Route::get('/info/add','InfoController@tambah');
Route::post('/info','InfoController@tambahProses');
Route::get('/info/edit/{id}','InfoController@edit');
Route::patch('/info/{id}','InfoController@editProses');
Route::delete('/info/{id}','InfoController@hapus');
Route::get('/info/showphoto/{id}','InfoController@tampilgambar');

//MimbarJumat
Route::get('/mimbar','MimbarJumatController@tampilData');
Route::get('/mimbar/add','MimbarJumatController@tambah');
Route::post('/mimbar','MimbarJumatController@tambahProses');
Route::get('/mimbar/edit/{id}','MimbarJumatController@edit');
Route::patch('/mimbar/{id}','MimbarJumatController@editProses');
Route::delete('/mimbar/{id}','MimbarJumatController@delete');
});
