<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Default meta data -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#fff">

    <!-- Meta info -->

    <meta name="author" content="Nikola Perišić">
    <!-- Website Description -->
    <meta name="description" content="Najposjećeniji sajt za prodaju polovnih i novih automobila, motora, bicikala, kamiona, radnih mašina, poljoprivrednih mašina, plovila, kao i auto dijelova i opreme u Crnoj Gori.">
    <meta name="keywords" content="cars bmw audi mercedes">

    <!-- Website Title -->

    <title>Dashboard | AutoDiler - Auto oglasi, prodaja djelova, auto placevi, auto saloni Crna Gora</title>

    <!-- Website Avatar -->

    <link rel="icon" href="img/optimized images/logo_min.png">

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('styles/dashboard_custom.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  
</head>

<body id="admin-page">

<div id="wrapper">

    <!-- Navigation -->
    @include('layouts.includes.admin_nav') 




    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="{{route('profile.index')}}"><i class="fa fa-dashboard fa-fw"></i> Profil</a>
                </li>




              
                 

                    </ul>
                    <!-- /.nav-second-level -->
                </li>




            </ul>

        </div>

    </div>

</div>






<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>

                @yield('content')
                
<br><br>
@yield('scripts')


            </div>

            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    
</div>
<img src="img/optimized images/logo_min.png" height="100">
<!-- /#page-wrapper -->


<!-- /#wrapper -->

<!-- jQuery -->

{{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/libs.js')}}"></script>

{{-- Moj custom Font Awesome kit --}}
<script src="https://kit.fontawesome.com/2824446f9a.js" crossorigin="anonymous"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script> --}}








</body>

</html>
