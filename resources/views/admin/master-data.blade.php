@extends('layout.admin-template')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="d-flex bg-light justify-content-between flex-wrap flex-md-nowrap align-items-center px-3 pt-3 pb-2 mb-3">
            <h1 class="h4">Master Data {{ $namepages }}</h1>
        </div>

        <div class="bg-light rounded h-100 p-4">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        @foreach ($tableheads as $tablehead)
                            <th scope="col">{{ $tablehead }}</th>
                        @endforeach
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datamasters as $index => $datamaster)
                        @switch($datamasters->first()->kategori)
                            @case('csb-165')
                                <tr>
                                    <th scope="row">{{ $datamasters->firstItem() + $index }}</th>
                                    <td class="align-middle" nowrap>
                                        {{ Str::limit($datamaster->nama, 25, '...') }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->tempat_lahir . ', ' . $datamaster->tanggal_lahir }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->kabupaten . ', ' . Str::limit($datamaster->provinsi, 12, '...') }}
                                    </td>

                                    <td class="align-middle text-center">
                                        {{ $datamaster->tahun_tamat_sd }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->experiment ? 'Experiment' : 'Umum' }}
                                    </td>

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
                                                        href="{{ route('masterdata.detail', [$parammasterdata, $datamaster->nisdh]) }}">View</a>

                                                </li>
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

                                                    <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $index }}"> Delete </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal Hapus -->
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
                                                <button type="button" class="btn btn-primary"
                                                    data-bs-dismiss="modal">Cencel</button>

                                                <form action="{{ route('santribaru.delete', $datamaster->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table End -->
                            @break

                            @case('Tholabun')
                                <tr>
                                    <th scope="row">{{ $datamasters->firstItem() + $index }}</th>
                                    <td class="align-middle" nowrap>
                                        {{ Str::limit($datamaster->nama, 25, '...') }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->tempat_lahir . ', ' . $datamaster->tanggal_lahir }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->kelas }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->experiment ? 'Experiment' : 'Umum' }}
                                    </td>

                                    <td class="align-middle">
                                        {!! $datamaster->active ? 'Active' : '<span class="bg-danger text-white rounded px-2">Non Active</span>' !!}
                                    </td>

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
                                                        href="{{ route('masterdata.detail', [$parammasterdata, $datamaster->nisdh]) }}">View</a>
                                                </li>

                                                <form action="{{ route('tholabah.actived', $datamaster->id) }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <input type="hidden" name="statussantri"
                                                        value="{{ $datamaster->active ? 0 : 1 }}">
                                                    <button class="dropdown-item"
                                                        type="submit">{{ $datamaster->active ? 'Deactivate' : 'Activate' }}</button>
                                                </form>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @break

                            @case('Pembina')
                                <tr>
                                    <th scope="row">{{ $datamasters->firstItem() + $index }}</th>
                                    <td class="align-middle" nowrap>
                                        {{ Str::limit($datamaster->nama, 25, '...') }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->kabupaten . ', ' . Str::limit($datamaster->provinsi, 12, '...') }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->depertement }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->marhalah }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->tahun_alumni }}
                                    </td>

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
                                                        href="{{ route('masterdata.detail', [$parammasterdata, $datamaster->nisdh]) }}">View</a>

                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @break

                            @case('Pengabdian luar')
                                <tr>
                                    <th scope="row">{{ $datamasters->firstItem() + $index }}</th>
                                    <td class="align-middle" nowrap>
                                        {{ Str::limit($datamaster->nama, 25, '...') }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->kabupaten . ', ' . Str::limit($datamaster->provinsi, 12, '...') }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->kontak }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->marhalah }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->tahun_alumni }}
                                    </td>

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
                                                        href="{{ route('masterdata.detail', [$parammasterdata, $datamaster->nisdh]) }}">View</a>

                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @break

                            @case('Alumni')
                                <tr>
                                    <th scope="row">{{ $datamasters->firstItem() + $index }}</th>
                                    <td class="align-middle" nowrap>
                                        {{ Str::limit($datamaster->nama, 25, '...') }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->kabupaten . ', ' . Str::limit($datamaster->provinsi, 12, '...') }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->kontak }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->marhalah }}
                                    </td>

                                    <td class="align-middle">
                                        {{ $datamaster->tahun_alumni }}
                                    </td>

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
                                                        href="{{ route('masterdata.detail', [$parammasterdata, $datamaster->nisdh]) }}">View</a>

                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @break
                        @endswitch
                    @endforeach
                </tbody>
            </table>
            {{ $datamasters->onEachSide(0)->links() }}
        </div>
    </div>
@endsection('content')
