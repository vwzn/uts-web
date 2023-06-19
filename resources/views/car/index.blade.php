@extends('layout.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-3 bg-body-tertiary rounded-3">
                <li class="breadcrumb-item active"><a href="{{ '/' }}"
                        class="text-decoration-none text-dark">Home</a></li>
            </ol>
        </nav>
    </div>
    <main class="container">
        <div class="d-flex justify-content-between mb-3">
            <div class="h2">TABLE CARS</div>
            <form action="{{ url('/search') }}" method="GET" class="form-inline d-flex">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <table class="table table-dark table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col" class="text-center">NO</th>
                    <th scope="col"class="text-center">NO Polisi</th>
                    <th scope="col"class="text-center">Color</th>
                    <th scope="col"class="text-center">Pemilik</th>
                    <th scope="col" class="text-center">Stok</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td class="text-center">{{ $car->id }}</td>
                        <td class="text-center">{{ $car->nopol }}</td>
                        <td class="text-center">{{ $car->color }}</td>
                        <td class="text-center">{{ $car->pemilik }}</td>
                        <td class="text-center">{{ $car->stok }}</td>
                        <td class="text-center">
                            <a href="{{ 'delete/' . $car->id }}" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus item ini?')">Delete</a>
                            <a href="{{ 'edit/' . $car->id }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ 'create' }}" class="btn btn-primary mb-3">Add car</a>
    </main>
@endsection
