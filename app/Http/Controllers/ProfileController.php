<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//!
use App\Models\Car;
use App\Models\User;
use App\Models\Photo;

//! Ovo je vazno za Laravel Helpers
use Illuminate\Support\Str;
//!

//!
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $carsCount = Car::count();

        $usersCount = User::count();
        
        return view('profil.pogledaj_profil', compact(
            'carsCount',
            'usersCount',
        ));

    }

    public function index2() {

        $detected_user = auth()->user();


        return view('profil.profil_podesavanja', compact(
            'detected_user',
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
        //
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
        
        $input = $request->all();

        $user = Auth::user();   
        
        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('storage/images', $name);

            $photo = $user->photo()->create(['file' => $name]);


            $input['photo_id'] = $photo->id; 

        }

        auth()->user()->whereId($id)->first()->update($input);

        

        return back();

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
