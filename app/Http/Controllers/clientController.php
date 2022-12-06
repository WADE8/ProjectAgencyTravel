<?php

namespace App\Http\Controllers;

use App\Http\Requests\clientStoreRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('Client.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(clientStoreRequest $request)
    {
        Client::create([
            'Nom'=>$request->Nom,
            'Prenom'=>$request->Prenom,
            'Numero'=>$request->Numero
        ]);


        return to_route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('Client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(clientStoreRequest $request, Client $client)
    {
        $request->validate([
            'Nom'=>'required',
            'Prenom'=>'required',
            'Numero'=>'required'
        ]);

        $client->update([
            'Nom'=>$request->Nom,
            'Prenom'=>$request->Prenom,
            'Numero'=>$request->Numero
        ]);

        return to_route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return to_route('client.index');
    }
}
