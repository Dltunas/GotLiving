<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Renta actual</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Favicons --><link href="{{url('bootstrap/assets/img/favicon.png')}}" rel="icon">
    <link href="{{url('bootstrap/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
    <link href="{{url('bootstrap/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('bootstrap/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('bootstrap/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('bootstrap/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{url('bootstrap/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{url('bootstrap/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{url('bootstrap/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
    <link href="{{url('bootstrap/assets/css/style.css')}}" rel="stylesheet">



  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

<div class="container-fluid px-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
        <div class="container-fluid d-flex"> <a class="navbar-brand">GotLiving</a>
            <ul class="nav nav-tabs" id="tab" role="tablist">
                <li class="nav-item" role="presentation"> <a class="nav-link" id="rentas-tab" data-toggle="tab" href="/rentas" role="tab" aria-controls="home" aria-selected="true">Rentas</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="/catalogoInmuebles" role="tab" aria-controls="profile" aria-selected="false">Catálogo</a> </li>
                <li class="nav-item" role="presentation"> <a  href="/logout" role="tab">
                     <img style="height: 35px; width: 35px" src="{{ asset('bootstrap/assets/img/logouticon.png') }}" href="/rentas">  </a>  </li>   
            </ul>
        </div>
    </nav>
</div>

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
                                <div class="col-lg-3 col-md-4 label">Arrendatario</div>
                                <form action="/arrendatario/{{ $inmueble->idArrendatario }}" class="col-lg-9 col-md-8">
                                    <button type="submit" class="btn btn-secondary">Ver perfil</button>
                                </form>
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
                                <div class="col-lg-3 col-md-4 label">Costo mensual</div>
                                <div class="col-lg-9 col-md-8">${{ $inmueble->precio }} MXN</div>
                            </div>


                            <form action="{{ route('Rentar-Inmueble', ['idInmueble' => $inmueble->id]) }}" method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Meses a rentar</div>
                                <div class="col-lg-9 col-md-8">
                                    <input type="range" class="form-range" id="tiempoRenta" name="tiempoRenta" max="{{ $inmueble->tiempoRentaMax }}" min="{{ $inmueble->tiempoRentaMin }}" value="0" onchange="document.getElementById('salidaTiempoRenta').value=value">
                                    <output id="salidaTiempoRenta" name="salidaTiempoRenta" for="tiempoRenta">1</output>
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-lg-9 col-md-8">
                                    <button type="submit" class="btn btn-primary">Rentar</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 label">
                        <form action="{{ url()->previous() }}">
                            <button type="submit" class="btn btn-secondary">Regresar</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
       
    </section>
</body>
</html>


