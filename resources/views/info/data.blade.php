@extends('admin.main')

@section('title','Masjid')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Info Aplikasi</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Info Aplikasi</a></li>
                    <li class="active">Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<form action="{{ url('admin/info/cari') }}" method="GET">
    <div class="input-group" style="padding: 20px">
        <input type="text" class="form-control" name="cari"value="{{ old('cari') }}"
            placeholder="Cari  Nama Kontak">  <span class="input-group-btn">
            <button type="submit" class="btn btn-default" value="CARI">
                <span class="glyphicon glyphicon-search"><i class="fa fa-search"></i></span>
            </button>
        </span>
    </div>
</form>
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
                    <strong> Info Aplikasi Masjid Kota Parepare</strong>
                </div>
               {{--  <div class="pull-right">
                    <a href=" {{ url ('admin/info/add') }} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>Add
                    </a>
                </div> --}}
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kontak</th>
                            <th>Nomor Hp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($info as $item)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $item -> nama_kontak }}</td>
                            <td>{{ $item -> no_hp }}</td>
                            {{-- <td>{{ $item -> tgl_pembaruan }}</td> --}}
                            <td class="text-center">
                                <a href="{{ url('admin/info/edit/'.$item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                {{-- <a href="{{ url('admin/info/showphoto/'.$item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-image"></i>
                                </a> --}}
                                {{-- <form action="{{ url('admin/info/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('konfirmasi Hapus Data ?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form> --}}
                            </td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
                {{-- {{$info->links()}} --}}
            </div>
        </div>


        
    </div>

</div>
@endsection