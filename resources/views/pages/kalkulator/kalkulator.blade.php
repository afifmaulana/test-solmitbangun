@extends('backend.default')
@section('content')

    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">kalkulator</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Kalkulator</a></li>
                <li class="breadcrumb-item active">Kalkulator Sederhana</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Kalkulator Sederhana</h4>

                    <form id="form_validation" method="POST" action="{{ route('kalkulator.hasil') }}">
                        @csrf
                        <div class="form-group form-float">
                            <label class="form-label">Bilangan Pertama</label>
                            <div class="form-line">
                                <input type="number" class="form-control"
                                       name="bilangan1" required placeholder="Masukkan Bilangan Pertama">

                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label class="form-label">Bilangan Kedua</label>
                            <div class="form-line">
                                <input type="number" class="form-control"
                                       name="bilangan2" required placeholder="Masukkan Bilangan Kedua">

                            </div>
                        </div>
                        <div class="form-group form-float">
                            <label>Operasi Perhitungan</label>
                            <select name="operasi" class="custom-select mb-3">
                                <option value="tambah"> + </option>
                                <option value="kurang"> - </option>
                                <option value="bagi"> / </option>
                                <option value="kali"> * </option>
                            </select>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">Hasil</button>

                        <div class="form-group form-float">
                            <label class="form-label">Hasil</label>
                            @if (session('info'))
                            <div class="alert alert-info">
                                {{ session('info') }}
                            </div>

                            @endif

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
