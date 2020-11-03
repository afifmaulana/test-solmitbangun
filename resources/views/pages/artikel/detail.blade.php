@extends('backend.default')
@section('content')


    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Artikel Detail</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Artikel</a></li>
                <li class="breadcrumb-item active">Data Detail</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                   <h4 class="card-title" id="1">{{$artikel->judul}}</h4>
                    <p><a href="{{asset('uploads/artikel/'.$artikel->gambar)}}" data-effect="mfp-newspaper"><img src="{{asset('uploads/artikel/'.$artikel->gambar)}}" width="500" height="250"></a></p>
                    <p>{!! $artikel->konten !!}</p>
                </div>
            </div>
        </div>
    </div>

    @endsection