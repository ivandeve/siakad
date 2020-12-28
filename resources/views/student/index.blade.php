@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-1">
        <div class="row">
            <div class="col-12 border-bottom">
                <div class="page-title-box d-flex">
                    <h4 class="page-title">Mahasiswa</h4>
                    <div class="page-title-right ml-auto">
                        <span>Menampilkan dan mengelola data mahasiswa</span>
                    </div>
                </div>
            </div>

            <div class="col-12 pb-2">
                <div class="page-title-box d-flex">
                    <div class="page-title-right ml-auto">
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="q" placeholder="cari" class="form-control form-control-light">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-info border-info text-white">
                                            Cari
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="btn btn-success ml-2">
                                Tambah
                            </a>
                            <a href="#" class="btn btn-warning ml-2">
                                Upload Excel
                            </a>
                            <a href="#" class="btn btn-primary ml-2">
                                Reset
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="text-center p-2 bg-primary text-white">Filter</div>
                <div class="card">
                    <div class="accordion custom-accordion" id="custom-accordion-one">
                        <div class="card mb-0">
                            <div class="card-header bg-white" id="headingFour">
                                <h5 class="m-0">
                                    <a class="custom-accordion-title d-block py-1" data-toggle="collapse"
                                        href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Program Studi <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseFour" class="collapse show" aria-labelledby="headingFour"
                                data-parent="#custom-accordion-one">
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Diploma 1 PPK</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Diploma 4
                                            Pertanahan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header bg-white" id="headingFive">
                                <h5 class="m-0">
                                    <a class="custom-accordion-title collapsed d-block py-1" data-toggle="collapse"
                                        href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Angkatan <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#custom-accordion-one">
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Diploma 1 PPK</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Diploma 4
                                            Pertanahan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header bg-white" id="headingSix">
                                <h5 class="m-0">
                                    <a class="custom-accordion-title collapsed d-block py-1" data-toggle="collapse"
                                        href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Status Mahasiswa <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#custom-accordion-one">
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Diploma 1 PPK</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Diploma 4
                                            Pertanahan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header bg-white" id="headingSeven">
                                <h5 class="m-0">
                                    <a class="custom-accordion-title collapsed d-block py-1" data-toggle="collapse"
                                        href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Jenis Kelamin <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                data-parent="#custom-accordion-one">
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Diploma 1 PPK</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Diploma 4
                                            Pertanahan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <div class="card-header bg-white" id="headingEight">
                                <h5 class="m-0">
                                    <a class="custom-accordion-title collapsed d-block py-1" data-toggle="collapse"
                                        href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Agama <i class="mdi mdi-chevron-down accordion-arrow"></i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                data-parent="#custom-accordion-one">
                                <div class="card-body">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Diploma 1 PPK</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Diploma 4
                                            Pertanahan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card">
                    <table class="table table-sm table-centered mb-0">
                        <thead class="bg-primary text-white">
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>TTL</th>
                            <th>Prodi</th>
                            <th>Kelas</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Irfan Yudistira</td>
                                <td>1802345</td>
                                <td>L</td>
                                <td>Islam</td>
                                <td>Klaten, 10 Maret 1986</td>
                                <td>Diploma 4 Pertanahan</td>
                                <td>A</td>
                                <td>Aktif</td>
                                <td>U + D</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
