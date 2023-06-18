@extends('layout.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item active"><a href="{{ '/' }}"
                        class="text-decoration-none text-dark">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ '/create' }}" class="text-decoration-none text-dark">Create</a>
                </li>
            </ol>
        </nav>
    </div>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <h1>Add Car</h1>
        </div>
    </nav>

    <main class="container">
        <form action="{{ 'store' }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nopol" class="form-label">Nopol</label>
                <input type="text" class="form-control" name="nopol" id="nopol" placeholder="nopol"
                    value="{{ old('nopol') }}">
                @error('nopol')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" name="color" id="color" placeholder="color"
                    value="{{ old('color') }}">
                @error('color')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pemilik" class="form-label">Pemilik</label>
                <input type="text" class="form-control" name="pemilik" id="pemilik" placeholder="pemilik"
                    value="{{ old('pemilik') }}">
                @error('pemilik')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="text" class="form-control" name="stok" id="stok" value="{{ old('stok') }}">
                @error('stok')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </main>
@endsection
