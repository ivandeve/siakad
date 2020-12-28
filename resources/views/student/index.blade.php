@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="row">
            {{-- <div class="col-12 d-inline-flex">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Recipient's username"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <a class="input-group-text btn btn-primary" id="basic-addon2">
                        Cari
                    </a>
                </div>
                <a class="btn btn-success ml-2" href="">Tambah</a>
                <a class="btn btn-warning ml-2" href="">Reset</a>
            </div> --}}

        </div>
        <div class="row">
            <div class="col-md-3">
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
                                    ...
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
                                    ...
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
                                    ...
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
                                    ...
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
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <table class="table table-sm table-centered mb-0">
                        <thead>
                            <tr>
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
                            </tr>
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
