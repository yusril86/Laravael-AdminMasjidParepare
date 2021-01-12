@extends('admin.main')

@section('title','Masjid')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Penceramah</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Masjid</a></li>
                    <li class="active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Data Masjid</strong>
                </div>
                <div class="pull-right">
                    <a href=" {{ url ('admin/masjid') }} " class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action=" {{ url('admin/masjid/'.$data->id) }} " method="POST" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Nama Masjid</label>
                                <input type="text" name="nama" class="form-control" value="{{ $data->nama_masjid }}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Alamat Masjid</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $data->alamat_masjid}}" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Pengurus Masjid</label>
                                <input type="text" name="namaPengurus" class="form-control" value="{{ $data->nama_pengurus}}">
                            </div>
                            <div class="form-group">
                                <label>Nomor HP Pengurus</label>
                                <input type="text" name="nomorPengurus" class="form-control" value="{{ $data->no_pengurus}}">
                            </div>
                            <div class="form-group">
                                <label>Koordinat</label>
                                <input type="text" name="koordinat" class="form-control" value="{{ $data->koordinat}}">
                            </div>
                            <div class="form-group">
                                <label>Kelurahan</label>
                                <input type="text" name="kelurahan" class="form-control" value="{{ $data->kelurahan}}">
                            </div>
                            <div class="form-group">
                                <label>kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control" value="{{ $data->kecamatan}}">
                            </div>
                            <div class="form-group">
                                <label>Upload Gambar</label>
                                <input type="file" name="gambar" class="form-control" alt="{{ asset ('storage/'.$data->gambar)}}" required>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>


        
    </div>

</div>
@endsection