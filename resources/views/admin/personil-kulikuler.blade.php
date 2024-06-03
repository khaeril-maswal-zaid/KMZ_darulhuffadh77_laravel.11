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
                        <th scope="col">Nama</th>
                        <th scope="col">Devisi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personilkulikulers as $index => $personilkulikuler)
                        <tr>
                            <th scope="row">{{ $personilkulikulers->firstItem() + $index }}</th>
                            <td class="align-middle">{{ Str::limit($personilkulikuler->santri->nama, 26, '...') }}</td>
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
@endsection('content')
