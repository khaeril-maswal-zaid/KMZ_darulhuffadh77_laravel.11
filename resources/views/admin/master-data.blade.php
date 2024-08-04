@extends('layout.admin-template')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="d-flex bg-light justify-content-between flex-wrap flex-md-nowrap align-items-center px-3 pt-3 pb-2 mb-3">
            <h1 class="h4">Master Data {{ $namepages }}</h1>
        </div>

        @session('success')
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endsession

        @session('warning')
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('warning') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endsession

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    <li>Failed to Post Article, An Error Occurred!</li>
                    @foreach ($errors->get('categoryid') as $message)
                        <li>{{ $message }}</li>
                    @endforeach
                </ul>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

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

                                                </li>
                                                <li>
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
                                                <li>
                                                    <form action="{{ route('tholabah.actived', $datamaster->id) }}" method="post">
                                                        @csrf
                                                        @method('put')
                                                        <input type="hidden" name="statussantri"
                                                            value="{{ $datamaster->active ? 0 : 1 }}">
                                                        <button class="dropdown-item"
                                                            type="submit">{{ $datamaster->active ? 'Deactivate' : 'Activate' }}</button>
                                                    </form>
                                                </li>
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

                                                <li>
                                                    <form action="{{ route('tholabah.abdian', $datamaster->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('put')
                                                        <button class="dropdown-item" type="submit">Assign Outside</button>
                                                    </form>
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
                                                <li>
                                                    <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalx{{ $index }}">Assign Inside</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal Abdian Masuk -->
                                <div class="modal fade" id="exampleModalx{{ $index }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('tholabah.abdianin', $datamaster->id) }}" method="post">
                                                @csrf
                                                @method('put')

                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel{{ $index }}">
                                                        Input Depertement
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-floating mb-2">
                                                        <input name="depertement" type="text"
                                                            class="form-control @error('depertement') is-invalid @enderror"
                                                            id="penuliscustom" placeholder="Oleh lainnya"
                                                            value="{{ old('depertement') }}">
                                                        <label for="penuliscustom">Depertement</label>
                                                        @error('depertement')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">Assign Inside</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal End -->
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
                                                <li>
                                                    <a class="dropdown-item" href="#">Update</a>
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
