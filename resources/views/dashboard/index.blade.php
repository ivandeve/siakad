@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-center text-white">Grafik</div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <td style="width:20%">
                                        Jenis Grafik
                                    </td>
                                    <td>
                                        <form action="">
                                            @csrf
                                            <select name="" id="" class="form-control">
                                                <option value="">Grafik 1</option>
                                                <option value="">Grafik 2</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:20%">
                                        Periode
                                    </td>
                                    <td>
                                        <form action="">
                                            @csrf
                                            <select name="" id="" class="form-control">
                                                <option value="">Grafik 1</option>
                                                <option value="">Grafik 2</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h4 class="text-center">Persentase Jumlah Mahasiswa
                            Berdasarkan Status Aktivitas Mahasiswa (AKM) Periode
                            2020/2021 Ganjil</h4>
                        <canvas id="myChart"></canvas>
                        <div class="pt-2">
                            <table class="table table-sm table-centered mb-0">
                                <h4 class="text-center">Jumlah Mahasiswa
                                    Berdasarkan Status Aktivitas Mahasiswa (AKM) Periode
                                    2020/2021 Ganjil</h4>
                                <thead>
                                    <tr>
                                        <th class="text-center bg-primary text-white">No
                                        </th>
                                        <th class="text-center bg-primary text-white">Program Studi
                                        </th>
                                        <th class="text-center bg-primary text-white">Jumlah
                                        </th>
                                        <th class="text-center bg-primary text-white">Aktif
                                        </th>
                                        <th class="text-center bg-primary text-white">Cuti
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center" style="width:5%">1</td>
                                        <td>Diploma 1 Pengukuran dan Pemetaan Kadastral</td>
                                        <td class="text-center">400</td>
                                        <td class="text-center">390</td>
                                        <td class="text-center">10</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" style="width:5%">2</td>
                                        <td>Diploma 4 Pertanahan</td>
                                        <td class="text-center">400</td>
                                        <td class="text-center">390</td>
                                        <td class="text-center">10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div>
                        <table class="table table-sm table-centered mb-0">
                            <thead>
                                <tr>
                                    <th colspan="2" class="text-center bg-primary text-white">Identitas Perguruan Tinggi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:30%">Alamat</td>
                                    <td>Jl. Tata Bhumi No. 5 Banyuraden Gamping Sleman</td>
                                </tr>
                                <tr>
                                    <td style="width:20%">Telepon</td>
                                    <td>0274-587239</td>
                                </tr>
                                <tr>
                                    <td style="width:20%">Email</td>
                                    <td>stpn@stpn.ac.id</td>
                                </tr>
                                <tr>
                                    <td style="width:20%">Website</td>
                                    <td>https://stpn.ac.id</td>
                                </tr>
                                <tr>
                                    <td style="width:20%">Operator</td>
                                    <td>Irfan Yudistira</td>
                                </tr>
                                <tr>
                                    <td style="width:20%">Semester Berlaku</td>
                                    <td>2020-2021 Ganjil</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <table class="table table-sm table-centered mb-0">
                            <thead>
                                <tr>
                                    <th colspan="2" class="text-center bg-success text-white">Informasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:30%">Versi Aplikasi</td>
                                    <td>Siakad 2.0</td>
                                </tr>
                                <tr>
                                    <td style="width:20%">Versi Database</td>
                                    <td>Siakad 2.0</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'pie',
            // The data for our dataset
            data: {
                // labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },
            // Configuration options go here
            options: {}
        });

    </script>
@endpush
