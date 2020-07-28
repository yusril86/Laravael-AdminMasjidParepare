@extends('admin.main')

@section('title','Masjid')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Masjid</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Masjid</a></li>
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
                    <strong>Data Masjid Kota Parepare</strong>
                </div>
                <div class="pull-right">
                    <a href=" {{ url ('masjid/add') }} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Masjid</th>
                            <th>Alamat Masjid</th>
                            <th>Nama Pengurus Masjid</th>
                            <th>Nomor Pengurus</th>
                            <th>Koordinat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($masjid as $item)
                        <tr>
                            <td>{{ $loop -> iteration  }}</td>
                            <td>{{ $item -> nama_masjid }}</td>
                            <td>{{ $item -> alamat_masjid }}</td>
                            <td>{{ $item -> nama_pengurus }}</td>
                            <td>{{ $item -> no_pengurus }}</td>
                            <td>{{ $item -> koordinat }}</td>
                            <td class="text-center">
                                <a href="{{ url('masjid/edit/'.$item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ url('masjid/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('konfirmasi Hapus Data ?')">
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
                {{$masjid->links()}}
            </div>
        </div>


        
    </div>

</div>
@endsection