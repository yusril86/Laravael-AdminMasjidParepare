@extends('admin.main')

@section('title','Muballigh')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Berita Info Aplikasi</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Berita Info Aplikasi</a></li>
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
                    <strong>Tambah Berita Info Aplikasi</strong>
                </div>
                <div class="pull-right">
                    <a href=" {{ url ('admin/info') }} " class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action=" {{ url('admin/info/'.$info->id) }} " method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Nama Kontak</label>
                                <input type="text" name="nama_kontak" class="form-control" value=" {{$info->nama_kontak}} " autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nomor Hp</label>
                                <textarea name="no_hp" class="form-control" required>{{$info->no_hp}}</textarea>
                            </div>
                            {{-- <div class="form-group">
                                <label>Tanggal Pembaruan</label>
                            <input type="date" name="tanggal" class="form-control" value="{{$info->tgl_pembaruan}}" required>
                            </div>
                            <div class="form-group">
                                <label>Upload Gambar</label>
                                <input type="file" name="logo" class="form-control" alt="{{ asset ('storage/'.$data->logo)}}" required>
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