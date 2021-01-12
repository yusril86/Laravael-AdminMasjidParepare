@extends('admin.main')

@section('title','Muballigh')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Gambar Masjid</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Gambar</a></li>
                    <li class="active">-</li>
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
                    <strong>Gambar Masjid</strong>
                </div>
                <div class="pull-right">
                    <a href=" {{ url ('admin/masjid') }} " class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="table">
                <table class="table table-striped table-hover table-responsive" id="table">
                     <thead>
                         <tr>
                             <th>Image</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>
                                 {{-- <img src="{{ asset ('storage/'.$item->file)}}"  alt="{{ $item->file }}" height="70"> --}}

                                 {{-- //ini untuk menampilkan 1 data
                                 {{--  --}}
                                 <img src="{{ asset ('storage/'.$masjid->gambar)}}"  alt="{{ $masjid->gambar }}">
    
                     </tbody>
                 </table>
            </div>
    </div>

</div>
@endsection