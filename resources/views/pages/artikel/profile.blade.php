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
<!-- Column -->
<div class="card">
    <img class="card-img-top" src="{{ asset ('assets/images/background/profile-bg.jpg') }}" alt="Card image cap">
    <div class="card-body little-profile text-center">
        <div class="pro-img"><img src="{{ asset ('assets/images/users/4.jpg') }}" alt="user"/></div>
        <h3 class="m-b-0">Angela Dominic</h3>
        <p>Web Designer &amp; Developer</p>
        <a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded">Follow</a>
        <div class="row text-center m-t-20">
            <div class="col-lg-4 col-md-4 m-t-20"><h3 class="m-b-0 font-light">1099</h3><small>Articles</small></div>
            <div class="col-lg-4 col-md-4 m-t-20"><h3 class="m-b-0 font-light">23,469</h3><small>Followers</small></div>
            <div class="col-lg-4 col-md-4 m-t-20"><h3 class="m-b-0 font-light">6035</h3><small>Following</small></div>
        </div>
    </div>
</div>

    @endsection