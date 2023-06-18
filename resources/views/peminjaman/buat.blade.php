@extends('layout.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item active"><a href="{{ '/' }}"
                        class="text-decoration-none text-dark">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{ '/loan' }}"
                        class="text-decoration-none text-dark">Sewa</a></li>
                <li class="breadcrumb-item active"><a href="{{ '/loan/buatPeminjaman' }}"
                        class="text-decoration-none text-dark">Buat Peminjaman</a></li>
            </ol>
        </nav>
    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title text-capitalize">menu peminjaman</h4>
            <a href="{{ route('peminjaman.index') }}" class="text-muted text-capitalize">back</a>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="" class="text-capitalize">Peminjam</label>
                <select name="" id="" class="form-control">
                    @foreach ($loans as $loan)
                        <option value="">{{ $loan->peminjam }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="" class="text-capitalize">Tanggal Pinjam</label>
                <select name="" id="" class="form-control">
                    @foreach ($loans as $loan)
                        <option value="">{{ $loan->tgl_pinjam }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
@endsection
