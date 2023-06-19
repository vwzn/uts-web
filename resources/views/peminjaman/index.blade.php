@extends('layout.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item active"><a href="{{ '/' }}"
                        class="text-decoration-none text-dark">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ '/loan' }}"
                        class="text-decoration-none text-dark">Sewa</a></li>
            </ol>
        </nav>
    </div>
    <div class="d-flex justify-content-between mb-3">
        <div class="h2">SEWA KENDARAAN</div>
        <form action="{{ url('/loan/search') }}" method="GET" class="form-inline d-flex">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>


    @if (session('Success'))
        <div class="alert alert-success">{{ session('Success') }}</div>
    @endif

    <table class="table table-dark table-hover table-striped">
        <thead>
            <tr>
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">Car Id</th>
                <th scope="col" class="text-center">NO Transaksi</th>
                <th scope="col" class="text-center">Tgl Pinjam</th>
                <th scope="col" class="text-center">Tgl Pengembalian</th>
                <th scope="col" class="text-center">Peminjam</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Petugas</th>
                <th scope="col" class="text-center">No KTP</th>
                <th scope="col" class="text-center ">Car</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($loans as $loan)
                <tr>
                    <td class="text-center">{{ $loan->id }}</td>
                    <td class="text-center">{{ $loan->car_id }}</td>
                    <td class="text-center">{{ $loan->notransaksi }}</td>
                    <td class="text-center">{{ $loan->tgl_pinjam }}</td>
                    <td class="text-center">{{ $loan->tgl_pengembalian }}</td>
                    <td class="text-center">{{ $loan->peminjam }}</td>
                    <td class="text-center">{{ $loan->status }}</td>
                    <td class="text-center">{{ $loan->petugas }}</td>
                    <td class="text-center">{{ $loan->noKtp }}</td>
                    @foreach ($cars as $car)
                        @if ($car->id == $loan->car_id)
                            <td class="text-center">{{ $car->color }}</td>
                        @endif
                    @endforeach
                    <td class="text-center">
                        <a href="{{ '/loan/delete/' . $loan->id }}" class="btn btn-danger"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">Delete</a>
                        <a href="{{ '/loan/edit/' . $loan->id }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ '/loan/buatPeminjaman' }}" class="btn btn-primary mb-3">+ Buat Peminjaman</a>
@endsection
