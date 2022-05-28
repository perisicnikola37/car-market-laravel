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

    {{-- Session message za objavljivanje oglasa --}}

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
       
       </div>


    

    {{-- Form --}}

    <div class="container"> 

        <div class="row mt-4">

            <div class="col-sm-3">
                
                {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\AdminController@store', 'files' => true]    ) !!} 
                <div class="form-group">
                    {!! Form::label('proizvodjac', 'Proizvođač:', ['class' => 'mb-2']) !!}
                    @error('proizvodjac')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::text('proizvodjac', null, ['placeholder' => 'Audi, BMW, Ford...', 'class' => 'form-control']) !!}
            </div>

            </div>

            <div class="col-sm-3">
                
               <div class="form-group">
                   {!! Form::label('model', 'Model:', ['class' => 'mb-2']) !!}
                   @error('model')
                   <span style="color: red">*</span>
                   @enderror
                   {!! Form::text('model', null, ['placeholder' => 'A3, A5, A6...', 'class' => 'form-control']) !!}
               </div>

            </div>

            <div class="col-sm-3">

                <div class="form-group" style="border: 1px solid #cccccc;padding: 5px;">
                    {!! Form::label('photo_id', 'Fotografija:', ['class' => 'mb-1']) !!}
                    @error('photo_id')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::file('photo_id', null, ['form-control']) !!}
                </div>

            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    {!! Form::label('oznaka', 'Oznaka:', ['class' => 'mb-2']) !!}
                    @error('oznaka')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::text('oznaka', null, ['placeholder' => '1.5 DCI, 2.0 TDI...', 'class' => 'form-control']) !!}
                </div>

            </div>

        </div>

        <div class="row mt-3">

            <div class="col-sm-3">

                <div class="form-group">
                    {!! Form::label('stanje_id', 'Stanje:', ['class' => 'mb-2']) !!}
                    @error('stanje_id')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::select('stanje_id', ['' => 'Odaberi'] + $stanje ,null, ['class' => 'form-control']) !!}
                </div>

            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    {!! Form::label('cijena', 'Cijena:', ['class' => 'mb-2']) !!}
                    @error('cijena')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::text('cijena', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    {!! Form::label('kilometraza', 'Kilometraža:', ['class' => 'mb-2']) !!}
                    @error('kilometraza')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::number('kilometraza', null, ['placeholder' => '0' , 'class' => 'form-control']) !!}
                </div>

            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    {!! Form::label('kubikaza', 'Kubikaža:', ['class' => 'mb-2']) !!}
                    @error('kubikaza')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::number('kubikaza', null, ['placeholder' => '0' , 'class' => 'form-control']) !!}
                </div>

            </div>

        </div>

        <div class="row mt-3">

            <div class="col-sm-3">

                <div class="form-group">
                    {!! Form::label('godiste', 'Godište:', ['class' => 'mb-2']) !!}
                    @error('godiste')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::number('godiste', null, ['placeholder' => '0' , 'class' => 'form-control']) !!}
                </div>

            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    {!! Form::label('lokacija', 'Lokacija:', ['class' => 'mb-2']) !!}
                    @error('lokacija')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::text('lokacija', null, ['class' => 'form-control']) !!}
                </div>

            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    {!! Form::label('gorivo_id', 'Gorivo:', ['class' => 'mb-2']) !!}
                    @error('gorivo_id')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::select('gorivo_id', ['' => 'Odaberi'] + $gorivo ,null, ['class' => 'form-control']) !!}
                </div>

            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    {!! Form::label('snaga', 'Snaga:', ['class' => 'mb-2']) !!}
                    @error('snaga')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::number('snaga', null, ['placeholder' => '0' , 'class' => 'form-control']) !!}
                </div>

            </div>

        </div>
    
        <div class="row mt-3">

            <div class="col-sm-3">

                <div class="form-group">
                    {!! Form::label('boja', 'Boja:', ['class' => 'mb-2']) !!}
                    @error('boja')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::text('boja', null, ['class' => 'form-control']) !!}
                </div>

            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    {!! Form::label('pogon_id', 'Pogon:', ['class' => 'mb-2']) !!}
                    @error('pogon_id')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::select('pogon_id', ['' => 'Odaberi'] + $pogon ,null, ['class' => 'form-control']) !!}
                </div>

            </div>

            <div class="col-sm-3">

                <div class="form-group">
                    {!! Form::label('mijenjac', 'Mijenjač:', ['class' => 'mb-2']) !!}
                    @error('mijenjac')
                    <span style="color: red">*</span>
                    @enderror
                    {!! Form::text('mijenjac', null, ['class' => 'form-control']) !!}
                </div>

            </div>

            <div class="col-sm-3">
                <div class="form-group">
                    {!! Form::label('opis', 'Opis oglasa:', ['class' => 'mb-2']) !!}
                    {!! Form::textarea('opis', null, ['class' => 'form-control', 'rows' => 3]) !!}
                </div>
            </div>

        </div>

        <div class="row align-right mt-2">
            <div class="form-group" style="margin-top: 20px">
                {!! Form::submit('Objavi', ['class' => 'btn btn-primary button-hover']) !!}
            </div> 
            
            {!! Form::close() !!}
        </div>


<br>
<br>
<br>







    </div>




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