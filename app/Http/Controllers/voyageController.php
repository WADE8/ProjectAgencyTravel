<?php

namespace App\Http\Controllers;

use App\Models\bus;
use App\Models\voyage;
use Illuminate\Http\Request;
use App\Http\Requests\voyageStoreRequest;

class voyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyages = voyage::with('bus')->get();
        return view('Voyage.index',compact('voyages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $buses = bus::all();
        return view('Voyage.create',compact('buses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(voyageStoreRequest $request)
    {
        voyage::create([
            'Destination'=>$request->Destination,
            'Montant'=>$request->Montant,
            'Date_Heure'=>$request->Date_Heure,
            'bus_id'=>$request->bus_id
        ]);

        return to_route('voyage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( voyage $voyage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(voyage $voyage)
    {
        return view('Voyage.edit', compact('voyage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(voyageStoreRequest $request, voyage $voyage)
    {
        $request->validate([
            'Destination'=>'required',
            'Montant'=>'required',
            'Date_Heure'=>'required',
            'bus_id'=>'required'
        ]);

        $voyage->update([
            'Destination'=>$request->Destination,
            'Montant'=>$request->Montant,
            'Date_Heure'=>$request->Date_Heure,
            'bus_id'=>$request->bus_id
        ]);
        return to_route('voyage.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(voyage $voyage)
    {
        $voyage->delete();
        return to_route('voyage.index');
    }
}
