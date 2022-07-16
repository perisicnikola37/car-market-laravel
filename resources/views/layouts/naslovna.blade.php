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

    <title>Naslovna | AutoDiler - Auto oglasi, prodaja djelova, auto placevi, auto saloni Crna Gora</title>


    {{-- @yield('title') --}}

    <!-- Website Avatar -->

    <link rel="icon" href="img/optimized images/logo_min.png">

    <!-- CSS Link -->

    <link rel="stylesheet" href="{{url('styles/style.css')}}">

    <!-- Bootstrap v.5 Link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    
    
@yield('content')

@yield('error')


    <!-- Font Awesome -->
    
    <script src="https://kit.fontawesome.com/2824446f9a.js" crossorigin="anonymous"></script>

    <!-- Bootstrap v.5 scripts -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <!-- Sweet Alert -->

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Custom Scripts -->

    <script src="{{url('/scripts/scroll_to_top.js')}}"></script>
    <script src="{{url('/scripts/scroll_indicator.js')}}"></script>
    <script src="{{url('/scripts/sweet_alert.js')}}"></script>

</body>

</html>