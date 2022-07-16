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
use App\Models\Gorivo;
use App\Models\Pogon;
use App\Models\Photo;

//! Ovo je vazno za Laravel Helpers
use Illuminate\Support\Str;
//!

class OglasiDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cars = Car::paginate(8);

        $auth_user_car = auth()->user()->cars;

        // $auth_user_car = Car::where('user_id', auth()->user()->id)->paginate();
    
        return view('dashboard.oglasi.svi_oglasi', compact(
            'cars',
            'auth_user_car'
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
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($slug)
    {
        
        $car = Car::findBySlug($slug);

        $user = Auth::user();
    
        $stanje = Stanje::pluck('name', 'id')->all();

        $gorivo = Gorivo::pluck('name', 'id')->all();

        $pogon = Pogon::pluck('name', 'id')->all();

        return view('dashboard.oglasi.izmijeni_oglas', compact(
            'car',
            'user',
            'stanje',
            'gorivo',
            'pogon',
        ));

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
        
        $input = $request->all();

        $user = auth()->user();
        
        // Zašto baš "photo_id"?
        // Zato jer je tako u form-i
        if ($file = $request->file('photo_id')) {
            
            $name = time() . $file->getClientOriginalName();

            $file->move('storage/images', $name);

            // Zašto baš 'file'?
            // Jer se u tabeli "photos" nalazi kolona "file" gdje ja storam ime fajla
            $photo = Photo::create(['file' => $name, 'imageable_id' => $user->id, 'imageable_type' => 'App\Models\Car']);

            $input['photo_id'] = $photo->id;

        }

        if (auth()->user()->roles->name == 'admin' || auth()->user()->roles->name == 'Administrator') {
            $car = Car::findOrFail($id)->whereId($id)->first()->update($input);
        } else {
            Auth::user()->cars()->whereId($id)->first()->update($input);
        }

        return redirect('/svi-oglasi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $car = Car::findOrFail($id);
        
        $car->delete();

        // unlink(public_path() . $car->photo->file);
        
        session()->flash('ad-deleted', 'Uspješno ste izbrisali oglas!');

        return redirect('/svi-oglasi');


    }


    
}
