@extends('layouts.admin')

@section('title')

<title>AutoDiler | Podešavanje profila</title>
    
@endsection

@section('content')
    
 </ul>

<div id="box-izmijeni-profil">

    <div class="container"> 
  
        {!! Form::model($detected_user, ['method' => 'PATCH', 'action' =>    ['App\Http\Controllers\ProfileController@update', $detected_user->id], 'files' => true]) !!}
 
        <div class="col-sm-3">
 
        <img 
        style="border-radius: 5px 5px"
        height="150"
        src="{{$detected_user->latest_photo ? $detected_user->latest_photo->file : 'https://thumbs.dreamstime.com/b/    no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg'}}" alt="">
 




        </div>
 
        <div class="col-sm-3">
 
         <div class="form-group">
 
             {!! Form::label('name', 'Ime:', ['class' => 'mb-2']) !!}
             {!! Form::text('name', null, ['class' => 'form-control']) !!}
             
         </div>
 
         <div class="form-group">
 
             {!! Form::label('email', 'Email adresa:', ['class' => 'mb-2']) !!}
             {!! Form::text('email', null, ['class' => 'form-control']) !!}
 
         </div>
 
        </div>
 
        <div class="col-sm-3">
 
         <div class="form-group">
 
             {!! Form::label('username', 'Korisničko ime:', ['class' => 'mb-2']) !!}
             {!! Form::text('username', null, ['class' => 'form-control']) !!}
 
         </div>
 

         <div class="form-group">
            {!! Form::label('password', 'Lozinka:') !!}
            {!! Form::password('password',['class' => 'form-control']) !!}
        </div>




    
        </div>
     
 
         <div class="col-sm-3">
 
            <div class="form-group">
 
                {!! Form::label('photo_id', 'Slika:', ['class' => 'mb-2']) !!}
                {!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
    
    
            </div>

             <div class="form-group" style="margin-top: 20px">
                 {!! Form::submit('Izmijeni', ['class' => 'btn btn-primary button-hover']) !!}
             </div> 
 
         </div>
         
         {!! Form::close() !!}
 
 </div>
    
</div>


@endsection