@extends('layouts.naslovna')

@section('content')

<!-- Header -->

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



<!-- POSTS -->


<div class="container mt-4">


    <!-- First Row -->


 
    <div class="row">

    @if(count($cars) > 0)
        
    @foreach($cars as $car)

    <div class="col-sm-3">


        <div id="post-box">

            <a href="{{route('car.show', $car->id)}}">
            <img
            class="img-fluid"
            src="{{$car->photo ? $car->photo->file : "Missing"}}" 
            alt="Missing picture"
            title="Slika automobila">
            </a>
            <div class="post-info">
            <p><a href="{{route('car.show', $car->id)}}">{{$car->proizvodjac}} - {{$car->model}}</a></p> 
            <p>Kilometraža: <span>{{$car->kilometraza}}km</span></p>
            <p>Godište: <span>{{$car->godiste}}</span></p>
            <p>Gorivo: <span>{{$car->gorivo->name}}</span></p>


            



            </div>

            <a class="button-post-info parallelogram" href="#">
                <span class="skew-fix">
                    {{$car->cijena}} &euro;&nbsp;</span>
            </a>

            <div class="footer">
     
                    <div class="col-sm-6">
                        <p style="font-size: 12px;margin-top: 10px;">
                            <i class="fas fa-map-marker-alt"></i> 
                            {{$car->lokacija}}
                        </p>
                    </div>
         
                    <div class="col-sm-6 align-right">
                        <p class="no-bold-p" style="font-size: 12px;margin-top: 10px;">
                            {{$car->created_at->diffForHumans()}}
                        </p>
                    </div>
     

            </div>
            

        </div>



        </div>

        @endforeach

      
    </div>

    @else
    
    <h5 id="nema-oglasa">Trenutno nema oglasa.</h5>
    
    @endif


    </div>







<div class="container">
    
    <div class="pagination">
        {{$cars->links('pagination::bootstrap-4')}}
    </div>
</div>


  


    <!-- Footer -->
        
    <div class="container">
        <footer>
            <p>Auto Diler <span style="color: #0073ff">|</span>created by <span><a href="https://github.com/dzonidevv" target="_blank">Dzoni</a></span></p>
        </footer>
    </div>
    
    </div>
    
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