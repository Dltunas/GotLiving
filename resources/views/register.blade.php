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
      <h1 style="margin-left: 525px">Registrarse</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-7">
          <div class="card" style="margin-left: 300px">
            <div class="card-body mt-3">
              <!-- Horizontal Form -->
              <form method="POST" action="">
                  @csrf
                  <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control"  name="nombre">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Apellidos</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="apellidos">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Institucion</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control"  name="institucion">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                          <input type="email" class="form-control" name="correo_e">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Telefono</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control"  name="telefono">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Descripcion</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" name="descripcion">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="username"  name="username">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Contraseña</label>
                      <div class="col-sm-10">
                          <input type="password" class="form-control" name="password">
                      </div>
                  </div>
                <fieldset class="d-flex flex-column mb-3">
                  <legend class="col-form-label col-sm-2 pt-0">Registrar como</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Cliente
                      </label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                      <label class="form-check-label" for="gridRadios3">
                        Arrendatario
                      </label>
                    </div>
                  </div>
                </fieldset>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
              </form><!-- End Horizontal Form -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('bootstrap/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{url('bootstrap/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('bootstrap/assets/vendor/chart.js/chart.min.js')}}"></script>
  <script src="{{url('bootstrap/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{url('bootstrap/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{url('bootstrap/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{url('bootstrap/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{url('bootstrap/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('bootstrap/assets/js/main.js')}}"></script>

</body>

</html>
