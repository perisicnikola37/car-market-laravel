@extends('layouts.naslovna')

<div class="container">

    <div class="row mt-2">

        <div class="col-sm-4">
           <a href="/">
            <img 
            class="img-fluid"
            src="img/optimized images/banner_min.png" 
            alt="Banner"
            title="Banner">
           </a>
        </div>

        <div class="col-sm-6 flex">
            <img 
            class="ad"
            src="img/optimized images/ad_min.png" 
            alt="Advertisement"
            title="Advertisement">
        </div>

        <div class="col-sm-2 flex">

            <div class="buttons">


            @if(!Auth::user())

            <a class="button1 button-hover parallelogram" href="/login">
                <span class="skew-fix">
                    <i class="fas fa-user"></i>
                    Prijavi se</span>
            </a>

            <br>

            <a class="button2 button-hover parallelogram" href="/register">
                <span class="skew-fix">
                    <i class="fas fa-user-cog"></i>
                    Registruj se</span>
            </a>

            @else


            <a class="button2 button-hover parallelogram" href="{{route('profil.index')}}">
                <span class="skew-fix">
                    <i class="fas fa-user"></i>
                    Profil</span>
            </a>

            <a class="button2 button-hover parallelogram" href="{{route('logout')}}">
                <span class="skew-fix">
                    <i class="fas fa-sign-out-alt"></i>
                    Odjavi se</span>
            </a>

            @endif
            </div>
            
        </div> 

    </div>

</div>


<!-- Navbar -->

<div class="container mt-3">

    <div class="wrapper">

        <a class="home-icon" href="/"><i class="fas fa-home"></i></a>
    
        <ul class="skew-fix">
            <li onclick="clickMe()" class="parallelogram"><a href="#"><span class="skew-fix">Kategorije</span></a></li>
            <li onclick="clickMe()" class="parallelogram"><a href="#"><span class="skew-fix">Prodavnice</span></a></li>
            <li onclick="clickMe()" class="parallelogram"><a href="#"><span class="skew-fix">Auto Placevi</span></a></li>
            <li onclick="clickMe()" class="parallelogram"><a href="#"><span class="skew-fix">Zastupnici</span></a></li>
            <li onclick="clickMe()" class="parallelogram"><a href="#"><span class="skew-fix">Servisi i usluge</span></a></li>
            <li onclick="clickMe()" class="parallelogram"><a href="#"><span class="skew-fix">Registracija vozila</span></a></li>
            <li onclick="clickMe()" class="parallelogram bg-success-custom"><a href="#"><span class="skew-fix">Popust Kartica</span></a></li>
            <li class="parallelogram bg-danger-custom"><a href="{{route('dodaj-oglas.index')}}"><span class="skew-fix">Dodaj oglas</span></a></li>
        </ul>
    </div>
    
</div>


@section('error')

<!-- 404 Error Text -->
<style>
    .noselect {
        user-select: none;
    }

    .margin {
        margin-top: 8rem
    }
</style>
<div class="text-center noselect margin">
<div class="error mx-auto text-danger" data-text="Greška">Greška</div>
<p class="lead  mb-5 text-gray-800">Dostignut limit</p>
<p class="text-gray-500 mb-0">Možete imati samo dva aktivna oglasa!</p>
<a href="{{route('profil.index')}}">&larr; Nazad</a>
</div>
    
@endsection