@extends('layouts.admin')

@section('content')

<div class="row">

    @if(count($cars) > 0)
        
    @foreach($cars as $car)

    <div class="col-sm-3">


        <div id="post-box">

            <a href="{{route('car.show', $car->id)}}">
            <img
            height="140"
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
            
            
            <div class="row mg-top-10">

 

                <div class="col-sm-6 align-center text-primary mg-top-5">
                    <a class="btn btn-primary" href="{{route('izmijeni-oglas', $car->id)}}">Izmijeni</a>
                </div>


                {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\OglasiDashboardController@destroy', $car->id]]) !!}

                <div class="col-sm-6 align-center text-primary mg-top-5">
                    {!! Form::submit('Izbriši', ['class' => 'btn btn-danger']) !!}
                </div>
                
                {!! Form::close() !!}
    


    

              

                
            </div>

    
            

        </div>

       



        </div>

        @endforeach

      
        


    </div>

    @else
    
    <h5 id="nema-oglasa">Trenutno nema oglasa.</h5>
    
    @endif


    </div>
    
@endsection