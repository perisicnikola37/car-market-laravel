@extends('layouts.admin')



    @section('error')

        <!-- 404 Error Text -->
        <style>
            .noselect {
                user-select: none;
            }

            .margin {
                margin-top: 8rem
            }
        </style>
    <div class="text-center noselect margin">
     <div class="error mx-auto" data-text="404">404</div>
     <p class="lead  mb-5 text-gray-800">Page Not Found</p>
     <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
     <a href="{{route('profil.index')}}">&larr; Nazad</a>
   </div>
     
    @endsection

