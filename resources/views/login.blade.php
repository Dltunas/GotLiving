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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">GotLiving</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Iniciar sesion</h5>
                    <p class="text-center small">Introduce tus datos para loguearte</p>
                  </div>

                  <form action="" method="POST" class="row g-3 needs-validation">
                      @csrf
                      <div class="col-12">
                          <label for="yourUsername" class="form-label">Username</label>
                          <div class="input-group has-validation">
                              <input type="text" name="username" class="form-control" id="username" required>
                              <div class="invalid-feedback">Introduce tu nombre de usuario</div>
                          </div>
                      </div>

                      <div class="col-12">
                          <label for="yourPassword" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password" required>
                          <div class="invalid-feedback">Introduce tu password</div>
                      </div>

                      <div class="col-12">
                          <button class="btn btn-primary w-100" type="submit">Iniciar sesion</button>
                      </div>

                      @error('message')
                        <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>
                      @enderror
                  </form>


                    <div class="col-12 mt-3">

                        <form action="/register" method="GET">
                            <p class="small mb-0">No tienes cuenta?
                                <button type="submit" class="btn btn-primary ms-2">Registrate</button>
                        </form>

                    </div>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
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
