@extends('backend.default')
@section('content')

    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Data Kategori</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kategori</a></li>
                <li class="breadcrumb-item active">Data Kategori</li>
            </ol>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Kategori</h4>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1 ?>
                            @foreach($kategori as $kategori)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$kategori->kategori}}</td>
                                    @if($kategori->status=='1')
                                        <td><span class="badge badge-success">Aktif</span></td>
                                    @else
                                        <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                    @endif
                                    <td>
                                        <a href="{{route('kategori.edit',$kategori->id)}}" class="btn btn-warning"><i
                                                    class="fa fa-pencil"></i></a>
                                        <a href="{{route('kategori.destroy',$kategori->id)}}" onclick="return confirm('Apakah Anda akan menghapus data ini?')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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