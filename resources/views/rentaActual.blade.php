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
<main id="main" class="main">

<div class="pagetitle">
  <h1>Renta del cliente</h1>
</div>

<section class="section profile">
  <div class="row">
    <div class="col-xl-6">

    <div class="card">
    <div class="card-body">
    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Datos generales</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nombre del cliente</div>
                    <div class="col-lg-9 col-md-8">{{ $cliente->nombre }} {{ $cliente->apellidos }} </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Inmueble</div>
                    <div class="col-lg-9 col-md-8">{{ $inmueble->titulo }} </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Nombre del arrendatario</div>
                    <div class="col-lg-9 col-md-8">{{ $arrendatario->nombre }} {{ $arrendatario->apellidos }}</div>
                  </div> 

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Teléfono del arrendatario</div>
                    <div class="col-lg-9 col-md-8"> {{ $arrendatario->telefono }}</div>
                  </div>

                </div>
            </div>
  </div>
</div>
</div>


<div class="row">
    <div class="col-lg-6">
    <div class="card">
            <div class="card-body">
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Detalles de la renta</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Tiempo de renta total</div>
                    <div class="col-lg-9 col-md-8"> {{ $renta->tiempoRenta }} </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tú calificación sobre este inmueble</div>
                      <div class="col-lg-9 col-md-8">{{ $calificacionInd }} puntos de 10</div>
                  </div> 


       
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#basicModal">
                      Calificar renta
              </button>
              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Calificar renta</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Ingresa la calificación que deseas asignar a este inmueble.
                      <form action="{{ route('Calificar-Renta', ['idRenta' => $renta->id]) }}" method="POST">
                        @method('PATCH')
                        @csrf
                      <div class="form-group">
                          <select name="calificacion" class="form-control">
                            <option>0</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                          </select>
                        </div>
                    </div>
                    
                    <div class="modal-footer">
                    
                      <button type="submit" class="btn btn-primary">Calificar renta</button>
                      </form>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      
                    </div>
                  </div>
                </div>
              </div>
                  
                </div>
            </div>

    </div>
  </div>
</div>
</div>

    
</section>

</main>
</body>
</html>