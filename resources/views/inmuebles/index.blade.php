@extends('app')

@section('content')

    <!-- Table with hoverable rows -->
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Calificacion</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Direccion</th>
            <th scope="col">Precio</th>
            <th scope="col">Detalles</th>
        </tr>
        </thead>
        <tbody>
        @foreach($inmuebles as $inmueble)
            <tr>
                <td>{{ $inmueble->idInmueble }}</td>
                <td>{{ $inmueble->titulo }}</td>
                <td>{{ $inmueble->calificacionGlobal }}</td>
                <td>{{ $inmueble->descripcion }}</td>
                <td>{{ $inmueble->direccion }}</td>
                <td>{{ $inmueble->precio }}</td>
                <td>
                    <form action="{{ route('inmuebles-edit', ['id' => $inmueble -> idInmueble]) }}">
                        <button type="submit" class="btn btn-primary">Ver detalles</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- End Table with hoverable rows -->

@endsection
