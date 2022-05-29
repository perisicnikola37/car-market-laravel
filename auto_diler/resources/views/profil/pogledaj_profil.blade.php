@extends('layouts.admin')

@section('title')

<title>AutoDiler | Dashboard</title>
    
@endsection

@section('content')

@if(auth()->user()->roles->name == "Administrator")

<div  style="padding: 20px">

<h4 class="mb-4 fw-normal">Admin Dashboard</h4>
    
<img height="200" src="https://positive.rs/wp-content/uploads//2020/08/5WysSystemAdmin-Featured.png">

</div>

@else

<div  style="padding: 20px">

<h4 class="mb-4 fw-normal">Subscriber Dashboard</h4>

<img height="200" src="https://miro.medium.com/max/1252/0*Zw1ZfCk0svcXVQXg.jpg"> 

</div>

@endif



@endsection



   