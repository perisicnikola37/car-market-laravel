@extends('layouts.admin')


@section('title')

<title>AutoDiler | Dashboard - prikazivanje korisnika</title>

@endsection


@section('content')



<div class="row">

    <div class="cardw3">
        <img 
        style="width:100%"
        src="{{$user->latest_photo ? $user->latest_photo->file : "https://thumbs.dreamstime.com/b/    no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg"}}" 
        alt="Slika korisnika"
        title="Slika korisnika - {{$user->name}}">
        <h1>{{$user->name}}</h1>
        <p class="title">{{$user->username}}</p>
        <p>{{$user->email}}</p>
        <p><button class="buttonw3">Contact</button></p>
      </div>

</div>

@endsection

