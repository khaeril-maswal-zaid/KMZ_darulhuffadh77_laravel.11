@extends('layout.admin-template')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light px-4 rounded">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <h1 class="h5">Ikatan Keluarga {{ config('app.name') }}</h1>

                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Add new
                </button>
            </div>
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
                </ul>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="bg-light rounded h-100 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">IKDH</th>
                        <th scope="col">Leader</th>
                        <th scope="col">Contak</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ikdhs as $index => $ikdh)
                        <tr>
                            <th scope="row">{{ 1 + $index }}</th>
                            <td>{{ $ikdh->cabang }}</td>
                            <td>{{ $ikdh->ketua->nama }}</td>
                            <td>{{ $ikdh->ketua->kontak }}</td>
                            <td>{{ Str::limit($ikdh->ketua->kabupaten . ', ' . $ikdh->ketua->provinsi, 17, '...') }}</td>

                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('ikdh.index') }}">View</a>
                                        </li>
                                        <li><button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $index }}"> Delete </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

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
                                        <button type="button" class="btn btn-primary"
                                            data-bs-dismiss="modal">Cencel</button>

                                        <form action="{{ route('ikdh.destroy', $ikdh->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal End -->
                    @endforeach
                </tbody>
            </table>
            {{ $ikdhs->onEachSide(0)->links() }}
        </div>
    </div>


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form action="{{ route('ikdh.store', '1234567890') }}" method="post" id="formadd">
                    @csrf

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add new IKDH</h1>
                        <button type="button" autocomplete="off" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-light">
                        <div class="input-group mb-3">
                            <input autocomplete="off" type="text" class="form-control" name="identifier" id="search"
                                placeholder="Enter the NISDH or Name" value="{{ old('identifier') }}">
                            <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/pendiri-kh-lanre-said.jpg') }}" class="img-fluid w-100"
                                    alt="Calon Kulikuler" id="imagePersonil">
                            </div>
                            <div class="col-md-8">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td width="40%">NISDH</td>
                                            <td width="15px">:</td>
                                            <td>Enter the NISDH</td>
                                        </tr>
                                        <tr>
                                            <td width="40%">Name</td>
                                            <td width="15px">:</td>
                                            <td>Enter the NISDH</td>
                                        </tr>
                                        <tr>
                                            <td width="40%">Contak</td>
                                            <td width="15px">:</td>
                                            <td>Enter the NISDH</td>
                                        </tr>
                                        <tr>
                                            <td width="40%">Address</td>
                                            <td width="15px">:</td>
                                            <td>Enter the NISDH</td>
                                        </tr>
                                        <tr>
                                            <td width="40%">Alumni Year</td>
                                            <td width="15px">:</td>
                                            <td>Enter the NISDH</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="form-floating mb-2">
                                    <input autocomplete="off" name="ikdh" type="text"
                                        class="form-control @error('ikdh') is-invalid @enderror" id="ikdh"
                                        placeholder="ikdh Berita" value="{{ old('ikdh') }}">
                                    <label for="ikdh">Input IKDH</label>
                                    @error('ikdh')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer d-none" id="modalFooter">
                        <button type="submit" class="btn btn-primary">Add New IKDH</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('button-addon2').addEventListener('click', function() {
                const elementTarget = document.querySelectorAll(
                    '.modal-body table tbody tr td:nth-child(3)');

                elementTarget[0].innerHTML =
                    '<div class="spinner-grow spinner-grow-sm" role="status"><span class="visually-hidden">Loading...</span></div>';
                elementTarget[1].innerHTML =
                    '<div class="spinner-grow spinner-grow-sm" role="status"><span class="visually-hidden">Loading...</span></div>';
                elementTarget[2].innerHTML =
                    '<div class="spinner-grow spinner-grow-sm" role="status"><span class="visually-hidden">Loading...</span></div>';
                elementTarget[3].innerHTML =
                    '<div class="spinner-grow spinner-grow-sm" role="status"><span class="visually-hidden">Loading...</span></div>';
                elementTarget[4].innerHTML =
                    '<div class="spinner-grow spinner-grow-sm" role="status"><span class="visually-hidden">Loading...</span></div>';

                const identifier = document.getElementById('search').value;
                const xhr = new XMLHttpRequest();

                xhr.open('GET', '{{ route('api.tholabah', ['', '']) }}/' + identifier +
                    '/{{ Auth::user()->jenis_kelamin }}',
                    true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            let response = JSON.parse(xhr.responseText);

                            document.getElementById('imagePersonil').src = response.image;
                            document.getElementById('modalFooter').classList.remove('d-none');

                            // Mengupdate nilai kolom-kolom tabel dengan data yang diterima
                            elementTarget[0].textContent = response.nisdh;
                            elementTarget[1].textContent = response.nama;
                            elementTarget[2].textContent = response.kontak;
                            elementTarget[3].textContent = response.kabupaten + ', ' + response
                                .provinsi;
                            elementTarget[4].textContent = response.tahun_alumni;

                            document.getElementById('formadd').action =
                                '{{ route('ikdh.store', '') }}/' + response.nisdh;
                        } else {
                            document.querySelector('.modal-footer').classList.add('d-none');
                            document.getElementById('imagePersonil').src =
                                '/assets/img/pendiri-kh-lanre-said.jpg';
                            elementTarget[0].textContent = 'NISDH or name not found';
                            elementTarget[1].textContent = 'NISDH or name not found';
                            elementTarget[2].textContent = 'NISDH or name not found';
                            elementTarget[3].textContent = 'NISDH or name not found';
                            elementTarget[4].textContent = 'NISDH or name not found';
                        }
                    }
                };
                xhr.send();
            });
        });
    </script>
@endsection('content')
