@extends('layout.app')

@section('content')
    <main class="container">
        <div class="h2">TABLE CARS</div>
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
                            <a href="{{ 'delete/' . $car->id }}" class="btn btn-danger">Delete</a>
                            <a href="{{ 'edit/' . $car->id }}" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ 'create' }}" class="btn btn-primary mb-3">Add car</a>
    </main>
@endsection
