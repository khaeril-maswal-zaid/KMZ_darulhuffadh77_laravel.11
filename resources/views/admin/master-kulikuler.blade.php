@extends('layout.admin-template')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h1 class="mb-4 h5"></h1>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr>
                            <th class="text-center align-middle" scope="col">#</th>
                            <th class="text-center align-middle" scope="col">Program</th>
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
                                            <li><a class="dropdown-item"
                                                    href="/admindh/hard-soft-skill/{{ $kulikuler->enum }}">Tentang</a></li>
                                            <li><a href="/admindh/pengurus/{{ $kulikuler->enum }}"
                                                    class="dropdown-item">Pengurus</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection('content')
