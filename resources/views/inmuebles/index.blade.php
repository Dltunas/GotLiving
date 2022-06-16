@extends('app')

@section('content')
        <div class="pagetitle">
            <h1>Inmuebles disponibles</h1>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body mt-3">

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
                                        <td>{{ $inmueble->id }}</td>
                                        <td>{{ $inmueble->titulo }}</td>
                                        <td>{{ $inmueble->calificacionGlobal }}</td>
                                        <td>{{ $inmueble->descripcion }}</td>
                                        <td>{{ $inmueble->direccion }}</td>
                                        <td>{{ $inmueble->precio }}</td>
                                        <td>
                                            <form action="{{ route('inmuebles-edit', ['id' => $inmueble -> id]) }}">
                                                <button type="submit" class="btn btn-primary">Reservar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with hoverable rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
