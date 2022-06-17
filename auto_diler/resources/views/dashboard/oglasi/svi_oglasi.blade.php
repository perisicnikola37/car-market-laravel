@extends('layouts.admin')




@section('title')

<title>AutoDiler | Dashboard - svi oglasi</title>
    
@endsection


@section('content')

<div class="container sessionsuccess" style="margin-bottom: 10px">

    @if (Session::has('ad-deleted'))

    <div style="height:50px;padding-top: 15px;">
        {{session('ad-deleted')}}
    </div>

    @endif
   
</div> 


@if (auth()->user()->roles->name == "Administrator")

<div class="row">


    @if(count($cars) > 0)
        
    @foreach($cars as $car)

    <div class="col-sm-3">


        <div id="post-box">

            <a href="{{route('slug', $car->slug)}}">
            <img
            height="120"
            class="img-fluid"
            src="{{$car->latest_photo ? $car->latest_photo->file : "https://thumbs.dreamstime.com/b/    no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg"}}" 
            alt="Missing picture"
            title="Slika automobila">
            </a>
            <div class="post-info">
            <p><a href="{{route('slug', $car->slug)}}">{{$car->proizvodjac}} - {{$car->model}}</a></p> 
            <p>Kilometraža: <span>{{$car->kilometraza}}km</span></p>
            <p>Godište: <span>{{$car->godiste}}</span></p>
            <p>Gorivo: <span>{{$car->gorivo->name}}</span></p>
            </div>

            <a class="button-post-info parallelogram" href="#">
                <span class="skew-fix">
                   
                    {{$car->cijena}} &euro;&nbsp;</span>
            </a> 
            
            
            <div class="row mg-top-10">

 

                <div class="col-sm-4 align-left text-primary mg-top-5">
                    <a class="btn btn-primary" href="{{route('izmijeni-oglas', $car->slug)}}">Izmijeni</a>
                </div>


                {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\OglasiDashboardController@destroy', $car->id]]) !!}

                <div class="col-sm-1 align-left text-primary mg-top-5">
   
                   {!! Form::submit('Izbriši', ['class' => 'btn btn-danger']) !!}
   
                </div>
                
                {!! Form::close() !!}
    

            </div>

    
            

        </div>

                   




        </div>

        @endforeach

        

    </div>

    {{$cars->links('pagination::bootstrap-4')}}

    @else
    
    <h5 id="nema-oglasa">Trenutno nema oglasa.</h5>
    
    @endif


    </>
    
    
    




@else 


@if(count($auth_user_car) > 0)
@foreach ($auth_user_car as $car)


    <div class="col-sm-3">


        <div id="post-box">

            <a href="{{route('slug', $car->slug)}}">
            <img
            height="120"
            class="img-fluid"
            src="{{$car->latest_photo ? $car->latest_photo->file : "https://thumbs.dreamstime.com/b/    no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg"}}" 
            alt="Missing picture"
            title="Slika automobila">
            </a>
            <div class="post-info">
            <p><a href="{{route('slug', $car->slug)}}">{{$car->proizvodjac}} - {{$car->model}}</a></p> 
            <p>Kilometraža: <span>{{$car->kilometraza}}km</span></p>
            <p>Godište: <span>{{$car->godiste}}</span></p>
            <p>Gorivo: <span>{{$car->gorivo->name}}</span></p>
            </div>

            <a class="button-post-info parallelogram" href="#">
                <span class="skew-fix">
                   
                    {{$car->cijena}} &euro;&nbsp;</span>
            </a> 
            
            
            <div class="row mg-top-10">

 

                <div class="col-sm-4 align-left text-primary mg-top-5">
                    <a class="btn btn-primary" href="{{route('izmijeni-oglas', $car->slug)}}">Izmijeni</a>
                </div>


                {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\OglasiDashboardController@destroy', $car->id]]) !!}

                <div class="col-sm-1 align-left text-primary mg-top-5">
   
                   {!! Form::submit('Izbriši', ['class' => 'btn btn-danger']) !!}
   
                </div>
                
                {!! Form::close() !!}
    

            </div>

    
            




    </div>


    </div>

    @endforeach


@else
<h5 id="nema-oglasa">Trenutno nema oglasa.</h5>
@endif


    
@endif

@endsection