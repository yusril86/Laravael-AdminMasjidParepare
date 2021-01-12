@extends('admin.main')

@section('title','Dashboard')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active"><i class="fa fa-dashboard"></i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
        <div class="card-body pb-0">
        <div class="dropdown float-right">
        <h4 class="mb-0">
        <h1 class="count" style="text-align: center">{{$penceramah}}</h1>
        </h4>
        <h4 class="text-light">Jumlah Penceramah</h4>
        <div class="chart-wrapper px-0" style="height:70px;" height="70"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
        <canvas id="widgetChart2" height="70" width="198" style="display: block; width: 198px; height: 70px;"></canvas>
        </div>
        </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
        <div class="card-body pb-0">
        <div class="dropdown float-right">
        <h4 class="mb-0">
        <h1 class="count" style="text-align: center">{{$masjid}}</h1>
        </h4>
        <h4 class="text-light" style="text-align: center">Jumlah Masjid</h4>
        <div class="chart-wrapper px-0" style="height:70px;" height="70"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
        <canvas id="widgetChart2" height="70" width="198" style="display: block; width: 198px; height: 70px;"></canvas>
        </div>
        </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-4">
        <div class="card-body pb-0">
        <div class="dropdown float-right">
        <h4 class="mb-0">
        <h1 class="count" style="text-align: center">{{$berita}}</h1>
        </h4>
        <h4 class="text-light" style="text-align: center">Jumlah Berita</h4>
        <div class="chart-wrapper px-0" style="height:70px;" height="70"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
        <canvas id="widgetChart2" height="70" width="198" style="display: block; width: 198px; height: 70px;"></canvas>
        </div>
        </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-5">
        <div class="card-body pb-0">
        <div class="dropdown float-right">
        <h4 class="mb-0">
        <h1 class="count" style="text-align: center">{{$video}}</h1>
        </h4>
        <h4 class="text-light" style="text-align: center">Jumlah video</h4>
        <div class="chart-wrapper px-0" style="height:70px;" height="70"><iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
        <canvas id="widgetChart2" height="70" width="198" style="display: block; width: 198px; height: 70px;"></canvas>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection