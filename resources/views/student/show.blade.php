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
                            {{-- <div class="form-group">
                                <div class="input-group">
                                    <input type="text" name="q" placeholder="cari" class="form-control form-control-light">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-info border-info text-white">
                                            Cari
                                        </span>
                                    </div>
                                </div>
                            </div> --}}
                            <a href="#" class="btn btn-warning ml-2">
                                Ubah
                            </a>
                            <a href="#" class="btn btn-primary ml-2">
                                Tambah
                            </a><a href="#" class="btn btn-danger ml-2">
                                Hapus
                            </a>
                            <a href="#" class="btn btn-success ml-2">
                                Daftar
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="text-center p-2 bg-primary text-white">Aksi Cepat</div>
                <div class="card">
                    <ul class="list-group">
                        <li class="list-group-item">Detail Mahasiswa</li>
                        <li class="list-group-item">Histori Pendidikan</li>
                        <li class="list-group-item">KRS Mahasiswa</li>
                        <li class="list-group-item">Histori Nilai</li>
                        <li class="list-group-item">Aktivitas Perkuliahan</li>
                        <li class="list-group-item">Prestasi</li>
                        <li class="list-group-item">Transkrip</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card">
                    <table class="table table-sm table-centered mb-0">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center bg-primary text-white">Data Mahasiswa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width:20%">Nama<span class="text-danger">*</span></td>
                                <td>Irfan Yudistira</td>
                            </tr>
                            <tr>
                                <td style="width:20%">Tempat Lahir<span class="text-danger">*</span></td>
                                <td>Klaten</td>
                            </tr>
                            <tr>
                                <td style="width:20%">Jenis Kelamin<span class="text-danger">*</span></td>
                                <td>Perempuan</td>
                            </tr>
                            <tr>
                                <td style="width:20%">Nama Ibu<span class="text-danger">*</span></td>
                                <td>Klaten</td>
                            </tr>
                            <tr>
                                <td style="width:20%">Tanggal Lahir<span class="text-danger">*</span></td>
                                <td>17-07-1992</td>
                            </tr>
                            <tr>
                                <td style="width:20%">Agama<span class="text-danger">*</span></td>
                                <td>Islam</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-3">
                            <li class="nav-item">
                                <a href="#alamat" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                    <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Alamat</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#profile" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Orang Tua</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Wali</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                    <span class="d-none d-md-block">Kebutuhan Khusus</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane" id="alamat">
                                <table class="table table-sm table-centered mb-0">
                                    <tbody>
                                        <tr>
                                            <td style="width:20%">Kewarganegaraan<span class="text-danger">*</span></td>
                                            <td>Indonesia</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">NIK<span class="text-danger">*</span></td>
                                            <td>123456789012345</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">NISN</td>
                                            <td>0101010101</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">NPWP</td>
                                            <td>0101010101</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Jalan</td>
                                            <td>Sisingamangaraja</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">RT</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">RW</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Dusun</td>
                                            <td>Kranggahan</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Kelurahan</td>
                                            <td>Pasang</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Kecamatan</td>
                                            <td>Singadireja</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Kodepos</td>
                                            <td>55171</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Jenis Tinggal</td>
                                            <td>Asrama</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Alat Transportasi</td>
                                            <td>55171</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Telepon</td>
                                            <td>0272323881</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">HP</td>
                                            <td>081215921919</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Email</td>
                                            <td>ivandev2021@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">Penerima KPS</td>
                                            <td>Tidak</td>
                                        </tr>
                                        <tr>
                                            <td style="width:20%">No KPS</td>
                                            <td>Singadireja</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane show active" id="profile">
                                <p>...</p>
                            </div>
                            <div class="tab-pane" id="settings">
                                <p>...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
