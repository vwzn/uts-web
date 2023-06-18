@extends('layout.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item active"><a href="{{ '/' }}"
                        class="text-decoration-none text-dark">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ '/loan' }}"
                        class="text-decoration-none text-dark">Sewa</a></li>
                <li class="breadcrumb-item active"><a href="{{ '/loan/tambahData' }}"
                        class="text-decoration-none text-dark">Tambah Data</a></li>
            </ol>
        </nav>
    </div>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <h1>Add Peminjaman</h1>
        </div>
    </nav>
    <main class="container scrollarea" data-bs-spy="scroll" data-bs-target="#navId">
        <form action="{{ 'store' }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="color" class="form-label">MOBIL</label>
                <select name="color" id="color" class="form-control">
                    @foreach ($cars as $car)
                        <option value="{{ $car->color }}">{{ $car->color }}</option>
                    @endforeach
                </select>
                @error('color')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="notransaksi" class="form-label">notransaksi</label>
                <input type="text" class="form-control" name="notransaksi" id="notransaksi" placeholder="notransaksi"
                    value="{{ old('notransaksi') }}">
                @error('notransaksi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">tgl_pinjam</label>
                <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" placeholder="tgl_pinjam"
                    value="{{ old('tgl_pinjam') }}">
                @error('tgl_pinjam')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tgl_pengembalian" class="form-label">tgl_pengembalian</label>
                <input type="date" class="form-control" name="tgl_pengembalian" id="tgl_pengembalian"
                    placeholder="tgl_pengembalian" value="{{ old('tgl_pengembalian') }}">
                @error('tgl_pengembalian')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="peminjam" class="form-label">peminjam</label>
                <input type="text" class="form-control" name="peminjam" id="peminjam" placeholder="peminjam"
                    value="{{ old('peminjam') }}">
                @error('peminjam')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="masih di pinjam" {{ old('status') === 'masih di pinjam' ? 'selected' : '' }}>masih di
                        pinjam</option>
                    <option value="sudah di kembalikan" {{ old('status') === 'sudah di kembalikan' ? 'selected' : '' }}>
                        sudah di kembalikan</option>
                </select>
                @error('status')
                    <p class="text-danger">{{ $message }}</p>
                @enderror

            </div>
            <div class="mb-3">
                <label for="petugas" class="form-label">petugas</label>
                <input type="text" class="form-control" name="petugas" id="petugas" placeholder="petugas"
                    value="{{ old('petugas') }}">
                @error('petugas')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="noKtp" class="form-label">noKtp</label>
                <input type="text" class="form-control" name="noKtp" id="noKtp" placeholder="noKtp"
                    value="{{ old('noKtp') }}">
                @error('noKtp')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="car_id" class="form-label">car_id</label>
                <input type="text" class="form-control" name="car_id" id="car_id" placeholder="car_id"
                    value="{{ old('car_id') }}">
                @error('car_id')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </main>
@endsection
