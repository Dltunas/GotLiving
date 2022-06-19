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

  <div class="container-fluid px-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed">
        <div class="container-fluid d-flex"> <a class="navbar-brand" href="#">GotLiving</a>
            <ul class="nav nav-tabs" id="tab" role="tablist">
                <li class="nav-item" role="presentation"> <a class="nav-link active" id="rentas-tab" data-toggle="tab" href="/rentas" role="tab" aria-controls="home" aria-selected="true">Rentas</a> </li>
                <li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="/inmuebles" role="tab" aria-controls="profile" aria-selected="false">Catálogo</a> </li>
            </ul>
        </div>
    </nav>
</div>

</head>
<body>

<div class="container-fluid mt-2 mb-5">
    <div class="inmuebles">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="d-flex justify-content-between p-3 bg-white mb-3 align-items-center"> <span class="font-weight-bold text-uppercase">Inmuebles en renta</span></div>
                <div class="row g-3">

                @foreach ($rentasPresentacion as $rentaPresentacion)
                <div class="col-md-4">
                    <div class="card"> <img src="{{ asset('bootstrap/assets/img/'.$rentaPresentacion[3]) }}"  height="170" class="card-img-top">
                        <div class="card-body">
                            <div class="d-flex justify-content-between"> <span class="font-weight-bold">{{$rentaPresentacion[4]}}</span></div>
                            <p class="card-text mb-1 mt-1">{{$rentaPresentacion[5]}}</p>

                            </div>
                            <hr>
                            <div class="card-body">

                            <form action="{{ route('Obtener-Renta', ['idRenta' => $rentaPresentacion[1]]) }}" method="GET">
                            @csrf
                            <div class="text-right buttons"> <button class="btn btn-outline-dark">Info</button> </div>
                            </form>

                        </div>
                    </div>
                </div>
@endforeach

                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>