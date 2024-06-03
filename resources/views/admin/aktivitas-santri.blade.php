@extends('layout.admin-template')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h1 class="mb-4 h5">KMZ BUG</h1>

            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="max-100 overflow-auto">
                        <div class="wow zoomIn mb-3" data-wow-delay="0.2s">
                            <h4>Rutinitas Sehari-hari</h4>
                        </div>

                        <table class="table table-primary table-striped table-bordered wow zoomIn" data-wow-delay="0.9s">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Waktu</th>
                                    <th scope="col" class="text-center">Aktivitas</th>
                                    <th scope="col" class="text-center" width="37%">Dokumentasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($harians as $harian)
                                    <tr class="text-center">
                                        <td scope="row" nowrap class="align-middle">{{ $harian->waktu }}</td>
                                        <td class="align-middle">{{ $harian->agenda }}</td>
                                        <td>
                                            <img src="{{ asset('assets/img/' . $harian->picture) }}" alt=""
                                                class="img-fluid rounded">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="max-100 overflow-auto">

                        <div class="wow zoomIn mb-3" data-wow-delay="0.2s">
                            <h4>Rutinitas Perpekan</h4>
                        </div>

                        <table class="table table-primary table-striped table-bordered wow zoomIn" data-wow-delay="0.9s">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Hari</th>
                                    <th scope="col" class="text-center">Waktu</th>
                                    <th scope="col" class="text-center">Agenda</th>
                                    <th scope="col" class="text-center" width="25%">Dokumentasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mingguans as $mingguan)
                                    <tr class="text-center">
                                        <td scope="row" nowrap class="align-middle">{{ $mingguan->hari }}</td>
                                        <td nowrap class="align-middle">{{ $mingguan->waktu }}</td>
                                        <td nowrap class="align-middle">{{ $mingguan->agenda }}</td>
                                        <td>
                                            <img src="{{ asset('assets/img/' . $mingguan->picture) }}" alt=""
                                                class="img-fluid rounded">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection('content')
