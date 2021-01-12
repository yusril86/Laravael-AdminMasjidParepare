@extends('admin.main')

@section('title','Muballigh')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Berita Masjid</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Berita Masjid</a></li>
                    <li class="active">Add</li>
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
                    <strong>Tambah Mimbar Jum'at Masjid</strong>
                </div>
                <div class="pull-right">
                    <a href=" {{ url ('admin/mimbar') }} " class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action=" {{ url('admin/mimbar') }} " method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Berita</label>
                                <input type="text" name="nama" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" style="width: 500px; height: 200px;" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Berita</label>
                                <input type="date" name="tanggal" class="form-control" required>
                            </div>
                            {{-- <div class="form-group">
                                <label>Upload Gambar</label>
                                <input type="file" name="file" class="form-control" required>
                            </div> --}}
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>


        
    </div>

</div>
@endsection