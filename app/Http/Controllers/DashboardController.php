<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//!
use App\Http\Requests\ObjaviOglasRequest;

//!
use Illuminate\Support\Facades\Auth;

//!
use App\Models\User;
use App\Models\Role;
use App\Models\Car;
use App\Models\Stanje;

//! Ovo je vazno za Laravel Helpers
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Event\ViewEvent;

//!


class DashboardController extends Controller
{


    public function redirect() {
        return redirect('/naslovna');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cars = Car::paginate(8);


        return view('oglasi.dashboard_oglasi', compact(
            'cars',
        ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {

    //     $car = Car::findOrFail($id);

    //     return view('oglasi.pogledaj_oglas', compact('car'));

    // }

    public function show($slug) {
       
        $car = Car::findBySlug($slug);

        return view('oglasi.pogledaj_oglas', compact('car'));

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
