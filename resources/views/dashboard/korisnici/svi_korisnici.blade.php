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

<div class="padding-20">
    
<table class="table">
    <thead>
        <tr class="text-primary">
            <th class="align-center">Ime</th>
            <th class="align-center">Korisničko ime</th>
            <th class="align-center">Avatar</th>
            <th class="align-center">Email</th>
            <th class="align-center">Status</th>
            <th class="align-center">Created</th>
            <th class="align-center">Updated</th>
            <th class="align-center">Izbriši</th>
        </tr>
    </thead>
    
    <tbody class="align-center">

        @foreach ($users as $user)

        <tr>
 
            <td><a style="color: #E30707" href="{{route('prikaži-korisnika', $user->id)}}">{{$user->name}}</a></td>
            
            <td>{{$user->username ? $user->username : "Missing"}}</td>

            <td>
                <img 
                height="70"
                src="{{$user->latest_photo ? $user->latest_photo->file : "https://thumbs.dreamstime.com/b/    no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg"}}" 
                alt="">
            </td>

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


<div class="row">

    <div class="col-sm-6 col-sm-offset-4">
 
        {{$users->links('pagination::bootstrap-4')}}

    </div>

</div>


    
@endsection