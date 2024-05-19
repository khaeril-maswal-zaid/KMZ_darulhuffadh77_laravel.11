@extends('layout.admin-template')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h1 class="mb-4 h5">{{ $datamasters[0]->kategori }}</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tempat Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tahun Tamat SD/SMP</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datamasters as $index => $datamaster)
                        <tr>
                            <th scope="row">{{ $datamasters->firstItem() + $index }}</th>
                            <td class="align-middle">{{ Str::limit($datamaster->nama, 26, '...') }}</td>
                            <td class="align-middle">{{ $datamaster->tempat_lahir . ', ' . $datamaster->tanggal_lahir }}
                            </td>
                            <td class="align-middle">{{ $datamaster->kabupaten . ', ' . $datamaster->provinsi }}</td>
                            <td class="align-middle text-center">{{ $datamaster->tahun_tamat_sd }}</td>
                            <td class="align-middle">{{ $datamaster->experiment ? 'Experiment' : 'Umum' }}</td>
                            <td>
                                <a href="/admindh/master-data/{{ $datamaster->nisdh }}"
                                    class="btn btn-success btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $datamasters->onEachSide(0)->links() }}
        </div>
    </div>
    <!-- Table End -->
@endsection('content')
