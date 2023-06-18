@extends('layout.app')

@section('content')
    <div class="h2">SEWA KENDARAAN</div>


    @if (session('Success'))
        <div class="alert alert-success">{{ session('Success') }}</div>
    @endif

    <table class="table table-dark table-hover table-striped">
        <thead>
            <tr>
                <th scope="col" class="text-center">NO</th>
                <th scope="col" class="text-center">NO Transaksi</th>
                <th scope="col" class="text-center">Tgl Pinjam</th>
                <th scope="col" class="text-center">Tgl Pengembalian</th>
                <th scope="col" class="text-center">Peminjam</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Petugas</th>
                <th scope="col" class="text-center">No KTP</th>
                <th scope="col" class="text-center d-none">Car Id</th>
                <th scope="col" class="text-center ">Car</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loans as $loan)
                <tr>
                    <td class="text-center">{{ $loan->id }}</td>
                    <td class="text-center">{{ $loan->notransaksi }}</td>
                    <td class="text-center">{{ $loan->tgl_pinjam }}</td>
                    <td class="text-center">{{ $loan->tgl_pengembalian }}</td>
                    <td class="text-center">{{ $loan->peminjam }}</td>
                    <td class="text-center">{{ $loan->status }}</td>
                    <td class="text-center">{{ $loan->petugas }}</td>
                    <td class="text-center">{{ $loan->noKtp }}</td>
                    <td class="text-center d-none">{{ $loan->car_id }}</td>
                    @foreach ($cars as $car)
                        <td class="text-center d-none">{{ $car->color }}</td>
                    @endforeach
                    <td class="text-center">
                        <a href="{{ '/loan/delete/' . $loan->id }}" class="btn btn-danger">Delete</a>
                        <a href="{{ '/loan/edit/' . $loan->id }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ '/loan/buatPeminjaman' }}" class="btn btn-primary mb-3">+ Buat Peminjaman</a>
    <a href="{{ '/loan/tambahData' }}" class="btn btn-primary mb-3">+ Data Peminjaman</a>
@endsection
