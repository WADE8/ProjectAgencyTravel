@extends('Layouts.defaultDash')
@section('content')
    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <h3 class="border-bottom pb-2 mb-4">Liste des clients</h3>
                    <div class="d-flex justify-content-between">
                        {{-- {{$voyages->links()}} --}}
                        <a class="btn btn-primary"href="{{ route('client.create') }}">Ajouter un client</a>
                    </div>
                    <table class="table  table-stripped mt-4">
                        <thead>
                            <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>Nom</th>
                                <th scope='col'>Prenom</th>
                                <th scope='col'>Numero telephone</th>
                                <th scope='col'>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <th>{{ $loop->index + 1}}</th>
                                    <td>{{ $client->Nom }}</td>
                                    <td>{{ $client->Prenom }}</td>
                                    <td>{{ $client->Numero }}</td>

                                    <td>
                                        <a href="{{ route('client.edit',$client->id) }}" class="btn btn-info" >Modifier</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('client.destroy', $client->id)}}" method="post" onsubmit="return confirm('Voulez vous supprimer?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Supprimer</button>
                                          </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
