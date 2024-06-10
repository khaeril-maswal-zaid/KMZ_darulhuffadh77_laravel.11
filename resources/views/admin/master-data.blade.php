@extends('layout.admin-template')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            @switch($datamasters->first()->kategori)
                @case('csb-165')
                    <h1 class="mb-4 h5">Calon {{ $datamasters->first()->jenis_kelamin == 'Laki-laki' ? 'Santri' : 'Santriwati' }}
                        Baru</h1>
                @break

                @case('Tholabun')
                    <h1 class="mb-4 h5">{{ $datamasters->first()->jenis_kelamin == 'Laki-laki' ? 'Santri' : 'Santriwati' }}</h1>
                @break

                @case('Pembina')
                    <h1 class="mb-4 h5">
                        {{ $datamasters->first()->jenis_kelamin == 'Laki-laki' ? $datamasters->first()->kategori . ' Santri' : $datamasters->first()->kategori . ' Santriwati' }}
                    </h1>
                @break

                @case('Pengabdian luar')
                    <h1 class="mb-4 h5">{{ $datamasters->first()->kategori }}</h1>
                @break

                @default
                    <h1 class="mb-4 h5"> {{ $datamasters->first()->kategori }}</h1>
            @endswitch
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
                            <td class="align-middle" nowrap>{{ Str::limit($datamaster->nama, 25, '...') }}</td>
                            <td class="align-middle">{{ $datamaster->tempat_lahir . ', ' . $datamaster->tanggal_lahir }}
                            </td>
                            <td class="align-middle">
                                {{ $datamaster->kabupaten . ', ' . Str::limit($datamaster->provinsi, 12, '...') }}
                            </td>
                            <td class="align-middle text-center">{{ $datamaster->tahun_tamat_sd }}</td>
                            <td class="align-middle">{{ $datamaster->experiment ? 'Experiment' : 'Umum' }}</td>
                            <td>
                                <div class="dropdown">
                                    <button
                                        class="btn {{ $datamaster->kategori_santri_baru != 'Done' ? ($datamaster->kategori_santri_baru == 'Verified' ? 'btn-success' : 'btn-secondary') : 'btn-primary' }} btn-sm dropdown-toggle"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('masterdata.detail', $datamaster->nisdh) }}">View</a>
                                        </li>

                                        @switch($datamasters->first()->kategori)
                                            @case('csb-165')
                                                <li>
                                                    <form action="{{ route('santribaru.terima', $datamaster->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('put')
                                                        <input type="hidden" name="kategorisantribaru"
                                                            value="{{ $datamaster->kategori_santri_baru == 'Verified' ? 'Daftar' : 'Verified' }}">
                                                        <button class="dropdown-item"
                                                            type="submit">{{ $datamaster->kategori_santri_baru == 'Verified' ? 'Unverified' : 'Verified' }}</button>
                                                    </form>
                                                </li>

                                                <li><button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $index }}"> Delete </button></li>
                                            @break

                                            @case('Tholabun')
                                                <li><a class="dropdown-item" href="#">BELUM X</a></li>
                                            @break

                                            @case('Pembina')
                                                <li><a class="dropdown-item" href="#">BELUM X</a></li>
                                            @break

                                            @case('Pengabdian luar')
                                                <li><a class="dropdown-item" href="#">BELUM X</a></li>
                                            @break

                                            @default
                                                <li><a class="dropdown-item" href="#">BELUM X</a></li>
                                        @endswitch
                                    </ul>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $index }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel{{ $index }}">
                                                    Delete Data?
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to delete this data? This action cannot be
                                                    undone.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Cencel</button>

                                                <form action="{{ route('santribaru.delete', $datamaster->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-primary">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table End -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $datamasters->onEachSide(0)->links() }}
        </div>
    </div>
@endsection('content')
