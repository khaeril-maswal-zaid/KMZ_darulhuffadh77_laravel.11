@extends('layout.admin-template')
@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light px-4 rounded">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <h1 class="h5">MANAGEMENT {{ $kulikuler->name }}</h1>

                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    <li>Failed to Add Personile, An Error Occurred!</li>
                </ul>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="bg-light rounded h-100 p-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Devisi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personilkulikulers as $index => $personilkulikuler)
                        <tr>
                            <th scope="row">{{ $personilkulikulers->firstItem() + $index }}</th>
                            <td class="align-middle">{{ Str::limit($personilkulikuler->santri->nama, 26, '...') }}</td>
                            <td class="align-middle">{{ $personilkulikuler->santri->kelas }}</td>
                            <td class="align-middle">
                                {{ $personilkulikuler->devisi }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $personilkulikulers->onEachSide(0)->links() }}
        </div>
    </div>
    <!-- Table End -->


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <form action="{{ route('kulikuler.addpersonil', '1234567890') }}" method="post" id="formadd">
                    @csrf
                    <input type="hidden" name="kulikuler" value="{{ $kulikuler->enum }}">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Management {{ $kulikuler->name }}</h1>
                        <button type="button" autocomplete="off" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-light">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="identifier" id="search"
                                placeholder="Enter the NISDH or Name" value="{{ old('identifier') }}">
                            <button class="btn btn-outline-primary" type="button" id="button-addon2">Search</button>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('assets/img/pendiri-kh-lanre-said.jpg') }}" class="img-fluid w-100"
                                    alt="Calon Kulikuler" id="imagePersonil">
                            </div>
                            <div class="col-md-9">
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
                                            <td width="40%">Class</td>
                                            <td width="15px">:</td>
                                            <td>Enter the NISDH</td>
                                        </tr>
                                        <tr>
                                            <td width="40%">Address</td>
                                            <td width="15px">:</td>
                                            <td>Enter the NISDH</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="form-floating mb-2">
                                    <input name="devisi" type="text"
                                        class="form-control @error('devisi') is-invalid @enderror" id="devisi"
                                        placeholder="devisi Berita" value="{{ old('devisi') }}">
                                    <label for="devisi">Devision</label>
                                    @error('devisi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-2">
                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px; resize: vertical;">{{ old('deskripsi') }}</textarea>
                            <label for="floatingTextarea">Job Description</label>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="modal-footer d-none">
                        <button type="submit" class="btn btn-primary">Add Management</button>
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

                const nisdh = document.getElementById('search').value;
                const xhr = new XMLHttpRequest();

                xhr.open('GET', '/api/personil-kulikuler/' + nisdh + '/{{ Auth::user()->jenis_kelamin }}',
                    true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === XMLHttpRequest.DONE) {
                        if (xhr.status === 200) {
                            let response = JSON.parse(xhr.responseText);

                            document.getElementById('imagePersonil').src = response.image;
                            document.querySelector('.modal-footer').classList.remove('d-none');

                            // Mengupdate nilai kolom-kolom tabel dengan data yang diterima
                            elementTarget[0].textContent = response.nisdh;
                            elementTarget[1].textContent = response.nama;
                            elementTarget[2].textContent = response.kelas;
                            elementTarget[3].textContent = response.alamat;

                            document.getElementById('formadd').action = '/admindh/kulikuler-add/' +
                                response
                                .nisdh;
                        } else {
                            document.querySelector('.modal-footer').classList.add('d-none');
                            document.getElementById('imagePersonil').src =
                                '/assets/img/pendiri-kh-lanre-said.jpg';
                            elementTarget[0].textContent = 'NISDH or name not found';
                            elementTarget[1].textContent = 'NISDH or name not found';
                            elementTarget[2].textContent = 'NISDH or name not found';
                            elementTarget[3].textContent = 'NISDH or name not found';
                        }
                    }
                };
                xhr.send();
            });
        });
    </script>
@endsection('content')
