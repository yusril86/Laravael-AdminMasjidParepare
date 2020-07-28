@extends('admin.main')

@section('title','Masjid')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Berita</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Berita</a></li>
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
                    <strong> Berita Masjid Kota Parepare</strong>
                </div>
                <div class="pull-right">
                    <a href=" {{ url ('berita/add') }} " class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i>Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Berita</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Berita</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $item)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $item -> nama_berita }}</td>
                            <td>{{ $item -> deskripsi }}</td>
                            <td>{{ $item -> tgl_berita }}</td>
                            <td class="text-center">
                                <a href="{{ url('berita/edit/'.$item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="{{ url('berita/showphoto/'.$item->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-image"></i>
                                </a>
                                <form action="{{ url('berita/'.$item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('konfirmasi Hapus Data ?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                {{-- <img src="{{ asset ('storage/'.$item->file)}}" height="50"> --}}
                            </td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
                {{$berita->links()}}
            </div>
        </div>


        
    </div>

</div>
@endsection