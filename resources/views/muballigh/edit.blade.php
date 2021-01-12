@extends('admin.main')

@section('title','Muballigh')

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
                    <li><a href="#">Muballigh</a></li>
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
                    <strong>Edit Data Muballigh</strong>
                </div>
                <div class="pull-right">
                    <a href=" {{ url ('admin/muballigh') }} " class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action=" {{ url('admin/muballigh/'.$data->id) }} " method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label>Nama Penceramah</label>
                                <input type="text" name="nama" class="form-control" value="{{ $data->nama_penceramah }}" autofocus required>
                            </div>
                            <div class="form-group">
                                <label>Nomor HP Penceramah</label>
                                <input type="text" name="nomor" class="form-control" value="{{ $data->nomor_telepon_penceramah}}" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat Penceramah</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $data->alamat_penceramah}}">
                            </div>
                            <div class="form-group">
                                <label>Jenis Acara</label>
                                <input type="text" name="jenisAcara" class="form-control" value="{{ $data->jenis_acara}}">
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