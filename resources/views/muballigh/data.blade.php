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
                    <li class="active">Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Muballigh Kota Parepare</strong>
                </div>
                <div class="pull-right">
                    <a href=" {{ url ('admin/muballigh/add') }} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penceramah</th>
                            <th>Nomor Penceramah</th>
                            <th>Alamat Penceramah</th>
                            <th>Jenis Acara</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penceramah as $item)
                        <tr>
                            <td>{{ $loop -> iteration   }}</td>
                            <td>{{ $item -> nama_penceramah }}</td>
                            <td>{{ $item -> nomor_telepon_penceramah }}</td>
                            <td>{{ $item -> alamat_penceramah }}</td>
                            <td>{{ $item -> jenis_acara }}</td>
                            <td class="text-center">
                                <a href="{{ url('admin/muballigh/edit/'.$item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ url('admin/muballigh/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('konfirmasi Hapus Data ?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
                {{ $penceramah-> links()}}
            </div>
        </div>


        
    </div>

</div>
@endsection