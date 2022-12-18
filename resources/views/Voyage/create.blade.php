@extends('Layouts.defaultDash')

@section('content')
    <div class="main-panel">
        <div class="main-content">
            <div class="content-wrapper">
                <div class="container-fluid">
                    <!-- Basic form layout section start -->
                    <section id="horizontal-form-layouts">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="content-header">Formulaire du Voyage</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="px-3">
                                            <form class="form form-horizontal" action="{{ route('voyage.store') }}" method="POST">
                                                @csrf
                                                <div class="form-body">
                                                    <h4 class="form-section">
                                                        <i class="icon-user"></i>  Details sur le voyage
                                                    </h4>
                                                    <div class="form-group row">


                                                        <label class="col-md-3 label-control" for="projectinput1">  Destination : </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="projectinput1" class="form-control"
                                                                name="Destination">
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2"> Date et Heure: </label>
                                                        <div class="col-md-9">
                                                            <input type="datetime-local" id="projectinput2" class="form-control"
                                                            name="Date_Heure">
                                                        </div>
                                                    </div>


                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control"
                                                            for="projectinput4">Numero de bus: </label>
                                                            <div class="col-md-9">
                                                                <select class="form-control form-select" aria-label="Default select example" name="bus_id">
                                                                    @foreach ($buses as $bus )
                                                                    <option value="{{ $bus->id }}">{{ $bus->Matricule }} ({{ $bus->Nbre_places }} places)</option>
                                                                    @endforeach

                                                                  </select>
                                                            </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput3">Montant :
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="number" id="projectinput3" class="form-control"
                                                                name="Montant">
                                                        </div>
                                                    </div>

                                                    <div class="form-actions">
                                                        <button type="button" class="btn btn-danger mr-1">
                                                         Cancel
                                                        </button>
                                                        <input type="submit" class="btn btn-primary" value='Save'>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- // Basic form layout section end -->
                </div>
            </div>
        </div>

        <footer class="footer footer-static footer-light">
            <p class="clearfix text-muted text-center px-2"><span>Copyright &copy; 2022 <a
                        href="https://1.envato.market/pixinvent_portfolio" id="pixinventLink" target="_blank"
                        class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
        </footer>

    </div>
@endsection

