@extends('layouts.admin')


@section('title')

<title>AutoDiler | Dashboard - svi korisnici</title>
    
@endsection


@section('content')


{{-- Session message za brisanje korisnika --}}

<div class="sessionsuccess">

    @if (Session::has('user-deleted'))

    <div
    class="alert">
        {{session('user-deleted')}}    
    </div> 

    @endif
   
   </div>

<div style="padding: 20px">
    
<table class="table">
    <thead>
        <tr class="text-primary">
            <th>Ime</th>
            <th>Korisničko ime</th>
            <th>Email</th>
            <th>Status</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Izbriši</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($users as $user)

        <tr>
 
            <td>{{$user->name}}</td>
            <td>{{$user->username ? $user->username : "Missing"}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->roles->name ? $user->roles->name : "Missing"}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>

            <td>
                {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\KorisniciDashboardController@destroy', $user->id]]) !!}

                <div class="col-sm-1 align-left text-primary mg-top-5">
   
                   {!! Form::submit('Izbriši', ['class' => 'btn btn-danger']) !!}
   
                </div>
                
                {!! Form::close() !!}
            </td>
   

        </tr>

        @endforeach



    </tbody>
</table>
</div>

    


    
@endsection