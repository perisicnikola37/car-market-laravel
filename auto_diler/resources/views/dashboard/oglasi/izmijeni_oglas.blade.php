@extends('layouts.admin')

@section('content')






    {{-- Session message za objavljivanje oglasa --}}
{{-- 
    <div class="container sessionsuccess">

     @if (Session::has('objavljen-oglas'))
 
     <div
     class="alert">
         {{session('objavljen-oglas')}}    
     </div> 
 
     @endif
    
    </div>

    <div class="container sessiondanger">

        @if (Session::has('nije-objavljen-oglas'))
    
        <div
        class="alert">
            {{session('nije-objavljen-oglas')}}    
        </div> 
    
        @endif
       
       </div> --}}


    
       <div class="col-sm-4 text-center">

        <h3>Izmijeni oglas: {{$car->proizvodjac}} - {{$car->model}}</h3>
        <img 
        height="240"
        style="border-radius: 20px"
        src="{{$car->photo->file}}" 
        alt="">

       </div>

       <div class="col-sm-4 text-center">
        <br>
        <br>
        {!! Form::model($car, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\OglasiDashboardController@update', $car->id], 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('proizvodjac', 'Proizvođač:', ['class' => 'mb-2']) !!}
            @error('proizvodjac')
            <span style="color: red">*</span>
            @enderror
            {!! Form::text('proizvodjac', null, ['class' => 'form-control', 'placeholder' => $car->proizvodjac]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('model', 'Model:', ['class' => 'mb-2']) !!}
            @error('model')
            <span style="color: red">*</span>
            @enderror
            {!! Form::text('model', null, ['class' => 'form-control', 'placeholder' => $car->model]) !!}
        </div>

        <div class="form-group" style="border: 1px solid #cccccc;padding: 5px;">
            {!! Form::label('photo_id', 'Fotografija:', ['class' => 'mb-1']) !!}
            @error('photo_id')
            <span style="color: red">*</span>
            @enderror
            {!! Form::file('photo_id', null) !!}
        </div>

        <div class="form-group">
            {!! Form::label('oznaka', 'Oznaka:', ['class' => 'mb-2']) !!}
            @error('oznaka')
            <span style="color: red">*</span>
            @enderror
            {!! Form::text('oznaka', null, ['class' => 'form-control', 'placeholder' => $car->oznaka]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('stanje_id', 'Stanje:', ['class' => 'mb-2']) !!}
            @error('stanje_id')
            <span style="color: red">*</span>
            @enderror
            {!! Form::select('stanje_id', ['' => $car->stanje->name] + $stanje ,null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('cijena', 'Cijena:', ['class' => 'mb-2']) !!}
            @error('cijena')
            <span style="color: red">*</span>
            @enderror
            {!! Form::text('cijena', null, ['class' => 'form-control', 'placeholder' => $car->cijena]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('kilometraza', 'Kilometraža:', ['class' => 'mb-2']) !!}
            @error('kilometraza')
            <span style="color: red">*</span>
            @enderror
            {!! Form::number('kilometraza', null, ['class' => 'form-control', 'placeholder' => $car->kilometraza]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('kubikaza', 'Kubikaža:', ['class' => 'mb-2']) !!}
            @error('kubikaza')
            <span style="color: red">*</span>
            @enderror
            {!! Form::number('kubikaza', null, ['class' => 'form-control', 'placeholder' => $car->kubikaza]) !!}
        </div>


       </div>





       <div class="col-sm-4 text-center">
        <br>
        <br>

        <div class="form-group">
            {!! Form::label('godiste', 'Godište:', ['class' => 'mb-2']) !!}
            @error('godiste')
            <span style="color: red">*</span>
            @enderror
            {!! Form::number('godiste', null, ['class' => 'form-control', 'placeholder' => $car->godiste]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('lokacija', 'Lokacija:', ['class' => 'mb-2']) !!}
            @error('lokacija')
            <span style="color: red">*</span>
            @enderror
            {!! Form::text('lokacija', null, ['class' => 'form-control', 'placeholder' => $car->lokacija]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('gorivo_id', 'Gorivo:', ['class' => 'mb-2']) !!}
            @error('gorivo_id')
            <span style="color: red">*</span>
            @enderror
            {!! Form::select('gorivo_id', ['' => $car->gorivo->name] + $gorivo ,null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('snaga', 'Snaga:', ['class' => 'mb-2']) !!}
            @error('snaga')
            <span style="color: red">*</span>
            @enderror
            {!! Form::number('snaga', null, ['placeholder' => '0' , 'class' => 'form-control', 'placeholder' => $car->snaga]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('boja', 'Boja:', ['class' => 'mb-2']) !!}
            @error('boja')
            <span style="color: red">*</span>
            @enderror
            {!! Form::text('boja', null, ['class' => 'form-control', 'placeholder' => $car->boja]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('pogon_id', 'Pogon:', ['class' => 'mb-2']) !!}
            @error('pogon_id')
            <span style="color: red">*</span>
            @enderror
            {!! Form::select('pogon_id', ['' => $car->pogon->name] + $pogon ,null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('mijenjac', 'Mijenjač:', ['class' => 'mb-2']) !!}
            @error('mijenjac')
            <span style="color: red">*</span>
            @enderror
            {!! Form::text('mijenjac', null, ['class' => 'form-control', 'placeholder' => $car->mijenjac]) !!}
        </div>

    
        <div class="form-group">
        {!! Form::label('opis', 'Opis oglasa:', ['class' => 'mb-2']) !!}
        {!! Form::textarea('opis', null, ['class' => 'form-control', 'rows'=> 3, 'placeholder' => $car->opis]) !!}
        </div>

        <div class="form-group align-right">
            {!! Form::submit('Sačuvaj', ['class' => 'btn btn-primary button-hover']) !!}
        </div> 

      <br>
      <br>
      <br>
      <br>
    





  




{{-- <div class="row" style="margin-top: 35px !important;margin:auto;text-align: center">

@include('includes.form_error')

</div> --}}

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