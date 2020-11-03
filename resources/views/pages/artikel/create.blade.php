@extends('backend.default')
@section('content')

    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Tambah Artikel</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Artikel</a></li>
                <li class="breadcrumb-item active">Tambah Artikel</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Tambah Artikel</h4>

                    <form class="form-material m-t-40" action="{{route('artikel.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>Nama Artikel</label>
                            <input type="text" class="form-control form-control-line" name="judul"
                                   placeholder="Masukkan Artikel">
                        </div>

                        <div class="form-group">
                            <label>Isi Konten</label>
                            <textarea class="summernote" name="konten" rows="5"
                                      placeholder="Masukkan Isi Konten"></textarea>
                </div>
                        <div class="form-group">
                            <label>Pilih Kategori</label>
                            <select class="form-control" name="kategori">
                                @foreach($kategori as $kat)
                                    <option value="{{$kat->id}}">{{$kat->kategori}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            {{--<div class="col-lg-6 col-md-6">--}}
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">File Upload2</h4>
                                        <label for="input-file-now-custom-1">You can add a default value</label>
                                        <input type="file" id="input-file-now-custom-1" class="dropify" name="gambar"/>
                                    </div>
                                </div>
                            {{--</div>--}}
                        </div>
                        <button type="submit" class="btn waves-effect waves-light btn-outline-success">Tambah</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection