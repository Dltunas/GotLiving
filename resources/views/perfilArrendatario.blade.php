<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
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
  <h1>Perfil</h1>
</div>

<section class="section profile">
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <!-- Muestra imágen de perfil -->
              <img src="{{url ('bootstrap/img/masterchief.jpg') }}" alt="Perfil" class="rounded-circle">
              
              <h2>{{ $arrendatario->nombre }}</h2>
            </div>
          </div>
        </div>

        
      </div>

</section>

<div class="pagetitle">
  <h1>Información general</h1>
</div>

<section class="section profile">
<div class="row">
<div class="col-xl-6">
          <div class="card">
            <div class="card-body">
                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Sobre mi</h5>
                  <p class="small fst-italic">{{ $arrendatario->descripcion }}</p>
                  <h5 class="card-title">Detalles del perfil</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nombre completo</div>
                    <div class="col-lg-9 col-md-8">{{ $arrendatario->nombre }} {{ $arrendatario->apellidos }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Correo electrónico</div>
                    <div class="col-lg-9 col-md-8">{{ $arrendatario->correo_e }}</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Institución</div>
                    <div class="col-lg-9 col-md-8">{{ $arrendatario->institucion }}</div>
                  </div> 

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Teléfono</div>
                    <div class="col-lg-9 col-md-8">{{ $arrendatario->telefono }}</div>
                  </div>

                </div>
        </div>
        </div>
        
</section>

<form action="/welcome">
    <button type="submit" class="btn btn-primary btn-lg">Regresar</button> 
</form>
        
</main>
</body>
</html>