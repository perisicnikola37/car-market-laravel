@extends('layouts.naslovna')

@section('content')

<!-- Header -->

<div class="container">

    <div class="row mt-2">

        <div class="col-sm-4">
           <a href="/">
            <img 
            class="img-fluid"
            src="/img/optimized images/banner_min.png" 
            alt="Banner"
            title="Banner">
           </a>
        </div>

        <div class="col-sm-6 flex">
            <img 
            class="ad"
            src="/img/optimized images/ad_min.png" 
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


            <a class="button2 button-hover parallelogram" href="{{route('profile.index')}}">
                <span class="skew-fix">
                    <i class="fas fa-user"></i>
                    Profil</span>
            </a>

            <a class="button2 button-hover parallelogram" href="{{route('logout')}}">
                <span class="skew-fix">
                    <i class="fas fa-sign-out-alt"></i>
                    Izloguj se</span>
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
            <li class="parallelogram bg-danger-custom"><a href="{{route('admin.index')}}"><span class="skew-fix">Dodaj oglas</span></a></li>
        </ul>
    </div>
    
</div>

<style>

.username {
    color: ##0f97ff;
}

</style>


<div class="container align-center" style="padding: 20px;margin-top: 15px">

    <section class="align-left" style="display: flex;height: 27px">

     <p class="text-bold">{{$car->proizvodjac}} - {{$car->model}}</p>
 
     <a class="button-post-info parallelogram" href="#" style="margin-left: 12px">
 
         <span class="skew-fix">
             {{$car->cijena}} &euro;&nbsp;
         </span>
 
     </a>

    </section>
   

<div class="row mt-4">

<div class="col-sm-3 view-oglas-box">
    <i class="fas fa-tachometer-alt fa-2x"></i>
    <br>
    <span id="span1">{{$car->kilometraza}} km</span>
    <br>
    <span>kilometraža</span>
</div>

<div class="col-sm-3 view-oglas-box">
    <i class="fas fa-oil-can fa-2x"></i>
    <br>
    <span id="span1">{{$car->kubikaza}} cm<sup>3</sup></span>
    <br>
    <span>kubikaža</span>
</div>

<div class="col-sm-3 view-oglas-box">
    <i class="fas fa-gas-pump fa-2x"></i>
    <br>
    <span id="span1">{{$car->gorivo->name}}</span>
    <br>
    <span>gorivo</span>
</div>

<div class="col-sm-3 view-oglas-box">
    <i class="fas fa-calendar-alt fa-2x"></i>
    <br>
    <span id="span1">{{$car->godiste}}</span>
    <br>
    <span>godište</span>
</div>
        
</div>





<div class="row">

    <div class="col-sm-2 align-left padding-40">
    <ul>
        <li>Stanje artikla:</li> 
        <li>Oznaka:</li>
        <li>Konjska snaga:</li>
        <li>Boja spoljašnjosti:</li>
        <li>Mijenjač:</li>
        <li>Pogon:</li>
    </ul>
    </div>

    <div class="col-sm-2 align-left padding-40 text-bold">
    <ul>
        <li>{{$car->stanje->name}}</li>
        <li>{{$car->oznaka}}</li>
        <li>{{$car->snaga}}</li>
        <li>{{$car->boja}}</li>
        <li>{{$car->mijenjac}}</li>
        <li>{{$car->pogon->name}}</li>
    </ul>
    </div>

    <div class="col-sm-8 align-right">
        
    <img 
    style="margin-left: 12px;margin-top: 5px;"
    class="w-50"
    src="{{$car->photo ? $car->photo->file : "Missing"}}" 
    alt="Missing picture"
    title="Slika automobila">
        
    </div>

</div>

</div>


{{-- <div class="container mt-5">
    <div class="row">


        <div class="col-sm-6">

        {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\AdminController@destroy', $car->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Izbriši oglas', ['class' => 'btn btn-danger col-sm-6']) !!}
        </div>
        {!! Form::close() !!}

        </div>



    </div>
</div> --}}


    </div>
    


    <div class="container">
        <div class="row">
            <div class="col-sm-4 lokacija-div">

                <span id="holder">Lokacija</span>
                <br>
                <div class="lokacija-div-mini">
                <span>Grad:</span>
                <span>{{$car->lokacija}}</span>
                </div>

            </div>
        </div>
    </div>


    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-4 lokacija-div">

                <span id="holder">Opis oglasa</span>
                <br>
                <div class="lokacija-div-mini">
                <span>Opis:</span>
                <span>{{$car->opis}}</span>
                </div>

            </div>
        </div>
    </div>


    <div class="container mt-5">
        <hr>
    </div>

    

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <!-- Scroll Indicator -->
    
    <div class="header">
      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>  
    </div>
    
    <!-- To Top Button -->
    
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <i class="fas fa-angle-up fa-2x"></i>
    </button>
    
@endsection