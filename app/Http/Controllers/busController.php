<?php

namespace App\Http\Controllers;

use App\Http\Requests\busStoreRequest;
use App\Models\bus;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;

class busController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buses = bus::all();
        return view('Bus.index',compact('buses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Bus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = IdGenerator::generate(['table'=>'bus' , 'length'=> 7 ,'field'=>'Matricule', 'prefix'=>'BUS-' ]);
        $bus = new bus();
        $bus->Matricule = $id;
        $bus->Nbre_places = $request->Nbre_places;
        $bus->save();

        return to_route('bus.index');

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

        $bus = bus::findOrFail($id);
        return view('Bus.edit',compact('bus'));
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

        $request->validate([
            'Nbre_places'=>'required'
        ]);

        $bus = bus::findOrFail($id);
        $bus->Nbre_places = $request->get('Nbre_places');

        $bus->save();


        return to_route('bus.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus = bus::findOrFail($id);
        $bus->delete();
        return to_route('bus.index');
    }
}
