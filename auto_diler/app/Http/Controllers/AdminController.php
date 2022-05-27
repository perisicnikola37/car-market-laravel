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


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
    
        $stanje = Stanje::pluck('name', 'id')->all();

        $gorivo = Gorivo::pluck('name', 'id')->all();

        $pogon = Pogon::pluck('name', 'id')->all();

        return view('oglasi.dodaj_oglas', compact(
            'user',
            'stanje',
            'gorivo',
            'pogon',
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
    public function store(ObjaviOglasRequest $request)
    {

        $input = $request->all();

        $user = Auth::user();

        if ($file = $request->file('photo_id')) {

            $name = time() . $file->getClientOriginalName();

            $file->move('storage/images', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;
        }

        if(isset($user)) {
            $user->cars()->create($input);
        } else {
            return redirect('/error404');
        }

        

        session()->flash('objavljen-oglas', 'Vaš oglas će uskoro biti objavljen!');

        return back();
        
        
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
        
        $car = Car::findOrFail($id);

        unlink(public_path() . $car->photo->file);

        $car->delete();

        return redirect('/esf');

    }
}
