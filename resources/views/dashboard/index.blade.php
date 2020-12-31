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
                        <h3 class="text-center">Judul Informasi</h3>
                        <canvas id="myChart"></canvas>
                        <div class="pt-2">
                            <h3 class="text-center">Judul Tabel</h3>
                            <table class="table table-sm table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center bg-primary text-white">Tabel 1
                                        </th>
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
                        <div>
                            <h3 class="text-center">Judul Tabel</h3>
                            <table class="table table-sm table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center bg-primary text-white">Tabel 2
                                        </th>
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
                                    <td style="width:40%">Nama<span class="text-danger">*</span></td>
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
                </div>
                <div class="card">
                    <div>
                        <table class="table table-sm table-centered mb-0">
                            <thead>
                                <tr>
                                    <th colspan="2" class="text-center bg-primary text-white">Informasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width:40%">Nama<span class="text-danger">*</span></td>
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
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First dataset',
                    // backgroundColor: 'rgb(255, 99, 132)',
                    // borderColor: 'rgb(255, 99, 132)',
                    data: [0, 10, 5, 2, 20, 30, 45]
                }]
            },

            // Configuration options go here
            options: {}
        });

    </script>
@endpush
