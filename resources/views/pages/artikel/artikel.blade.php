@extends('backend.default')
@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">Data Artikel</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Artikel</a></li>
                <li class="breadcrumb-item active">Data Artikel</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Artikel</h4>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Isi Konten</th>
                                <th>Gambar</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1 ?>
                            @foreach($artikel as $artikel)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td><a href="{{route('artikel.detail',$artikel->slug)}}">{{$artikel->judul}}</a></td>
                                    <td>{!! str_limit($artikel->konten, 100, '....')!!}</td>
                                    <td><a href="{{asset('uploads/artikel/'.$artikel->gambar)}}" data-effect="mfp-newspaper"><img src="{{asset('uploads/artikel/'.$artikel->gambar)}}" width="100" height="100"></a></td>
                                    @if($artikel->status=='1')
                                        <td><span class="badge badge-success">Aktif</span></td>
                                    @else
                                        <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                    @endif
                                    <td>
                                        <a href="{{route('artikel.edit',$artikel->id)}}" class="btn btn-warning"><i
                                                    class="fa fa-pencil"></i></a>
                                        <a href="{{route('artikel.destroy',$artikel->id)}}" onclick="return confirm('Apakah Anda akan menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php $no++ ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection