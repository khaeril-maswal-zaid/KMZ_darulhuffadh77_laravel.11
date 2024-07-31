@extends('layout.admin-template')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light px-4 rounded">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                <h1 class="h5">Kontak Pontren {{ config('app.name') }}</h1>

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
                        <th scope="col">Label</th>
                        <th scope="col">Akun</th>
                        <th scope="col">Name</th>
                        <th scope="col">Link</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kontaks as $index => $kontak)
                        <tr>
                            <th scope="row">{{ 1 + $index }}</th>
                            <td>{{ $kontak->medsos }}</td>
                            <td>{{ $kontak->akun }}</td>
                            <td>{{ $kontak->nama }}</td>
                            <td>
                                <a href="{{ $kontak->link }}">
                                    {{ Str::limit($kontak->link, 30, '...') }}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('edit.kontak', $kontak->slug) }}"
                                    class="btn btn-success btn-sm">Update</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection('content')
