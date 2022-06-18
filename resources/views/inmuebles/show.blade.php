@extends('app')

@section('content')
    <div class="pagetitle">
        <h1>Información general</h1>
    </div>

    <section class="section profile">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title mt-3">Detalles del Inmueble</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Descripcion del inmueble</div>
                                <div class="col-lg-9 col-md-8">{{ $inmueble->descripcion }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Titulo</div>
                                <div class="col-lg-9 col-md-8">{{ $inmueble->titulo }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Foto</div>
                                <div class="col-lg-9 col-md-8"><img style="width: 100%; max-width: 300px" src="{{ asset('bootstrap/assets/imgcasas/'.$inmueble->foto) }}" class="rounded-circle"></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Calificacion</div>
                                <div class="col-lg-9 col-md-8">{{ $inmueble->calificacionGlobal }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Veces calificado</div>
                                <div class="col-lg-9 col-md-8">{{ $inmueble->cantidadCalificaciones }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Dirección</div>
                                <div class="col-lg-9 col-md-8">{{ $inmueble->direccion }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Tiempo de renta</div>
                                <div class="col-lg-9 col-md-8">
                                    <input type="range" class="form-range" id="tiempoRenta" name="tiempoRenta" max="{{ $inmueble->tiempoRentaMax }}" min="{{ $inmueble->tiempoRentaMin }}" value="0" onchange="document.getElementById('salidaTiempoRenta').value=value">
                                    <output id="salidaTiempoRenta" name="salidaTiempoRenta" for="tiempoRenta">1</output>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Costo mensual</div>
                                <div class="col-lg-9 col-md-8">{{ $inmueble->precio }}</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Arrendatario</div>
                                <form action="/arrendatario/{{ $inmueble->idArrendatario }}" class="col-lg-9 col-md-8">
                                    <button type="submit" class="btn btn-secondary">Ver perfil</button>
                                </form>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">
                                    <form action="{{ route('inmuebles') }}">
                                        <button type="submit" class="btn btn-secondary">Regresar</button>
                                    </form>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <form action="{{ route('inmuebles-rentar', ['id' => $inmueble -> id]) }}">
                                        <button type="submit" class="btn btn-primary">Rentar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
