@extends('Layouts.defaultDash')
@section('content')
    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <h3 class="border-bottom pb-2 mb-4">Liste des voyages</h3>
                    <div class="d-flex justify-content-between">
                        {{-- {{$voyages->links()}} --}}
                        <a class="btn btn-primary"href="{{ route('voyage.create') }}">Ajouter un voyage</a>
                    </div>
                    <table class="table  table-stripped mt-4">
                        <thead>
                            <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>Itineraire</th>
                                <th scope='col'>Date et Heure</th>
                                <th scope='col'>Montant</th>
                                <th scope='col'>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($voyages as $voyage)
                                <tr>
                                    <th>{{ $loop->index + 1}}</th>
                                    <td>{{ $voyage->Itineraire }}</td>
                                    <td>{{ $voyage->Date_Heure }}</td>
                                    <td>{{ $voyage->Montant }}</td>

                                    <td>
                                        <a href="{{ route('voyage.edit',$voyage->id) }}" class="btn btn-info" >Modifier</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('voyage.destroy', $voyage->id)}}" method="post" onsubmit="return confirm('Voulez vous supprimer?')">
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
