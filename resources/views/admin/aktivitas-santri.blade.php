@extends('layout.admin-template')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">

        <div class="bg-light px-4 rounded">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <h1 class="h5">ACTIVITIES SANTRI</h1>

                <div class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    Add Activities
                </div>
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
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="w-100 overflow-auto" style="max-height: 427px">
                        <div class="max-100 overflow-auto">
                            <div class="wow zoomIn mb-3" data-wow-delay="0.2s">
                                <h4>Daily routine</h4>
                            </div>

                            <table class="table table-primary table-striped table-bordered wow zoomIn"
                                data-wow-delay="0.9s">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Time</th>
                                        <th scope="col" class="text-center">Activities</th>
                                        <th scope="col" class="text-center" width="37%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($harians as $harian)
                                        <tr class="text-center">
                                            <td scope="row" nowrap class="align-middle">{{ $harian->waktu }}</td>
                                            <td class="align-middle text-start" nowrap>{{ $harian->agenda }}</td>
                                            <td>
                                                <button class="btn btn-sm btn-success dropdown-toggle" type="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Action
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                            onclick="deleteAktivitas(this)"
                                                            data-bs-target="#exampleModalDelete"
                                                            data-delete="{{ $harian->id }}"> Delete
                                                        </button>
                                                    </li>
                                                    <li><button class="dropdown-item">Image</button></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
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
                                    <th scope="col" class="text-center" width="25%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mingguans as $mingguan)
                                    <tr class="text-center">
                                        <td scope="row" nowrap class="align-middle">{{ $mingguan->hari }}</td>
                                        <td nowrap class="align-middle">{{ $mingguan->waktu }}</td>
                                        <td nowrap class="align-middle">{{ $mingguan->agenda }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-success dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                        onclick="deleteAktivitas(this)" data-bs-target="#exampleModalDelete"
                                                        data-delete="{{ $mingguan->id }}"> Delete
                                                    </button>
                                                </li>
                                            </ul>
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


    <!-- Modal Add -->
    <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="{{ route('aktivitassantri.create') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Activities</h1>
                        <button type="button" autocomplete="off" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body bg-light">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/blog-2.jpg') }}" class="img-fluid w-100 img-preview2"
                                    alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-4 pe-0">
                                        <div class="form-floating mb-2">
                                            <input name="time1" type="time"
                                                class="form-control @error('time1') is-invalid @enderror" id="time1"
                                                placeholder="The time1 of agenda" value="{{ old('time1') }}">
                                            <label for="time1">Time</label>
                                            @error('time1')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 px-2">
                                        <div class="form-floating mb-2">
                                            <input name="time2" type="time"
                                                class="form-control @error('time2') is-invalid @enderror" id="time2"
                                                placeholder="The time2 of agenda" value="{{ old('time2') }}">
                                            <label for="time2">Time</label>
                                            @error('time2')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 ps-0">
                                        <div class="form-floating mb-2">
                                            <select class="form-select @error('hari') is-invalid @enderror"
                                                id="floatingSelect1" aria-label="Floating label select example"
                                                name="hari">
                                                <option value="">Select</option>
                                                <option value="Jumat" {{ old('hari') == 'Jumat' ? 'selected' : '' }}>
                                                    Friday
                                                </option>
                                                <option value="Sabtu" {{ old('hari') == 'Sabtu' ? 'selected' : '' }}>
                                                    Saturday
                                                </option>
                                                <option value="Ahad" {{ old('hari') == 'Ahad' ? 'selected' : '' }}>
                                                    Sunday
                                                </option>
                                                <option value="Senin" {{ old('hari') == 'Senin' ? 'selected' : '' }}>
                                                    Monday
                                                </option>
                                                <option value="Selasa" {{ old('hari') == 'Selasa' ? 'selected' : '' }}>
                                                    Tuesday
                                                </option>
                                                <option value="Rabu" {{ old('hari') == 'Rabu' ? 'selected' : '' }}>
                                                    Wednesday
                                                </option>
                                                <option value="Kamis" {{ old('hari') == 'Kamis' ? 'selected' : '' }}>
                                                    Thursday
                                                </option>
                                                <option value="Setiap hari"
                                                    {{ old('hari') == 'Setiap hari' ? 'selected' : '' }}>
                                                    Every Day
                                                </option>

                                            </select>
                                            <label for="floatingSelect1">Day</label>

                                            @error('hari')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-2">
                                    <input name="agenda" type="text"
                                        class="form-control @error('agenda') is-invalid @enderror" id="agenda"
                                        placeholder="The agenda santri" value="{{ old('agenda') }}">
                                    <label for="agenda">Agenda</label>
                                    @error('agenda')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating mb-2">
                                    <input name="image" type="file"
                                        class="form-control @error('image') is-invalid @enderror" onchange="imgPreview2()"
                                        id="sampul2" placeholder="image Berita" value="{{ old('image') }}">
                                    <label for="image">Image</label>
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Add Activities</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Table End -->


    <!-- Modal Delete -->
    <div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">
                        Delete Data?
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this data? This action cannot be
                        undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cencel</button>

                    <form action="{{ route('akttvitas.delete', 'true') }}" method="post" id="deleteForm">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Table End -->

    <script>
        function imgPreview2() {
            const sampul = document.querySelector('#sampul2');
            const imgPreview = document.querySelector('.img-preview2');

            const file = sampul.files[0];

            // Cek apakah file ada dan apakah tipe file adalah gambar
            if (file && file.type.startsWith('image/')) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(file);

                fileReader.onload = function(e) {
                    imgPreview.src = e.target.result;
                }
            }
        }
    </script>

    <script>
        function deleteAktivitas(button) {
            var id = button.getAttribute('data-delete');
            var form = document.getElementById('deleteForm');

            form.action = '/admindh/delete-aktivitas-santri/' + id
        }
    </script>
    <!-- Table End -->
@endsection('content')
