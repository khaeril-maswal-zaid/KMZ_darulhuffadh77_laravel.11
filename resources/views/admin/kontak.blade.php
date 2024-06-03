@extends('layout.admin-template')

@section('content')
    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light rounded h-100 p-4">
            <h1 class="mb-4 h5">KMZ BUG</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Label</th>
                        <th scope="col">Akun</th>
                        <th scope="col">Name</th>
                        <th scope="col">Link</th>
                        <th scope="col">Aksi</th>
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
                                <a href="" class="btn btn-success btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Table End -->
@endsection('content')
