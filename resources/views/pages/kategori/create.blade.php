@extends('backend.default')
@section('content')

    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Tambah Kategori</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
                <li class="breadcrumb-item active">Tambah Kategori</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Kategori</h4>

                    <form class="form-material m-t-40" action="{{route('kategori.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" class="form-control form-control-line" name="kategori"
                                   placeholder="Masukkan Kategori">
                        </div>
                        <button type="sumbit" class="btn waves-effect waves-light btn-outline-success">Tambah</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection