@extends('layout.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item active"><a href="{{ '/' }}"
                        class="text-decoration-none text-dark">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ '/loan' }}"
                        class="text-decoration-none text-dark">Sewa</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <h1>Edit Loan</h1>
        </div>
    </nav>

    <main class="container">
        <form action="{{ route('peminjaman.update', $loans->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="notransaksi" class="form-label">notransaksi</label>
                <input type="text" class="form-control" name="notransaksi" id="notransaksi"
                    value="{{ $loans->notransaksi }}">
            </div>
            <div class="mb-3">
                <label for="tgl_pinjam" class="form-label">tgl_pinjam</label>
                <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam"
                    value="{{ $loans->tgl_pinjam }}">
            </div>
            <div class="mb-3">
                <label for="tgl_pengembalian" class="form-label">tgl_pengembalian</label>
                <input type="date" class="form-control" name="tgl_pengembalian" id="tgl_pengembalian"
                    value="{{ $loans->tgl_pengembalian }}">
            </div>
            <div class="mb-3">
                <label for="peminjam" class="form-label">peminjam</label>
                <input type="text" class="form-control" name="peminjam" id="peminjam" value="{{ $loans->peminjam }}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">status</label>
                <select name="status" id="status" class="form-select">
                    <option value="Masih di pinjam">Masih di pinjam</option>
                    <option value="Sudah di kembalikan">Sudah di kembalikan</option>
                </select>
                </select>
            </div>
            <div class="mb-3">
                <label for="petugas" class="form-label">petugas</label>
                <input type="text" class="form-control" name="petugas" id="petugas" value="{{ $loans->petugas }}">
            </div>
            <div class="mb-3">
                <label for="noKtp" class="form-label">noKtp</label>
                <input type="text" class="form-control" name="noKtp" id="noKtp" value="{{ $loans->noKtp }}">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Mobil</label>
                <input type="text" class="form-control" name="color" id="color" value="{{ $cars->color }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </main>
@endsection
