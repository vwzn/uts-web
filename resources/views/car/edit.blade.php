@extends('layout.app')

@section('content')
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <h1>Edit Car</h1>
    </div>
</nav>

<main class="container">
    <form action="{{ route('car.update', $cars->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nopol" class="form-label">Nopol</label>
            <input type="text" class="form-control" name="nopol" id="nopol" value="{{ $cars->nopol }}">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Color</label>
            <input type="text" class="form-control" name="color" id="color" value="{{ $cars->color }}">
        </div>
        <div class="mb-3">
            <label for="pemilik" class="form-label">Pemilik</label>
            <input type="text" class="form-control" name="pemilik" id="pemilik" value="{{ $cars->pemilik }}">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" class="form-control" name="stok" id="stok" value="{{ $cars->stok }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</main>


@endsection
