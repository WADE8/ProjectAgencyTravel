@extends('Layouts.defaultDash')
@section('content')
    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <h3 class="border-bottom pb-2 mb-4">Liste des bus</h3>
                    <div class="d-flex justify-content-between">
                        {{-- {{$voyages->links()}} --}}
                        <a class="btn btn-primary"href="{{ route('bus.create') }}">Ajouter un bus</a>
                    </div>
                    <table class="table  table-stripped mt-4">
                        <thead>
                            <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>Numero de bus</th>
                                <th scope='col'>Nombre de places</th>
                                <th scope='col'>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buses as $bus)
                                <tr>
                                    <th>{{ $loop->index + 1}}</th>
                                    <td>{{ $bus->Matricule }}</td>
                                    <td>{{ $bus->Nbre_places }}</td>

                                    <td>
                                        <a href="{{ route('bus.edit',$bus->id) }}" class="btn btn-info" >Modifier</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('bus.destroy', $bus->id)}}" method="post" onsubmit="return confirm('Voulez vous supprimer?')">
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
