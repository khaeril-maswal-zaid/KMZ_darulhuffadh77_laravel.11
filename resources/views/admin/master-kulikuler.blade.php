@extends('layout.admin-template')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="d-flex bg-light justify-content-between flex-wrap flex-md-nowrap align-items-center px-3 pt-3 pb-2 mb-3">
            <h1 class="h4 id-table">Programs Hard & Soft Skill Students </h1>

            <!-- Button trigger modal -->
            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Add Program
            </button>
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
                        <th class="align-middle" scope="col">#</th>
                        <th class="align-middle" scope="col">Program</th>
                        <th class="text-center align-middle" scope="col">Aksi</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($kulikulers as $index => $kulikuler)
                        <tr>
                            <th scope="row">{{ 1 + $index }}</th>
                            <td>{{ $kulikuler->name . ', ' . $kulikuler->full_name }}</td>

                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle btn-sm"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Aksi
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('hardsoftskill.tentang', $kulikuler->enum) }}">Tentang</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('hardsoftskill.personil', $kulikuler->enum) }}"
                                                class="dropdown-item">Pengurus</a>
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

                                        <form action="{{ route('hardsoftskill.destroy', $kulikuler->id) }}" method="post">
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
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('hardsoftskill.store') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                            Add Program Hard & Soft Skill
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating mb-2">
                            <input autocomplete="off" name="nameprogram" type="text"
                                class="form-control @error('nameprogram') is-invalid @enderror" id="nameprogram"
                                placeholder="Nama Program" value="{{ old('nameprogram') }}">
                            <label for="nameprogram">Name of Program</label>
                            @error('nameprogram')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-2">
                            <input autocomplete="off" name="fullname" type="text"
                                class="form-control @error('fullname') is-invalid @enderror" id="fullname"
                                placeholder="Nama Program" value="{{ old('fullname') }}">
                            <label for="fullname">Fullname of Program</label>
                            @error('fullname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-floating mb-2">
                            <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                placeholder="Leave a comment here" id="floatingTextareaUpdate" style="height: 100px; resize: vertical;">{{ old('deskripsi') }}</textarea>
                            <label for="floatingTextareaUpdate">Description Of Program</label>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal End -->
@endsection('content')
