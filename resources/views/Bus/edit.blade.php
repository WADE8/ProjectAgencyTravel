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
                                <h2 class="content-header">Formulaire pour Bus</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="px-3">
                                            <form class="form form-horizontal" action="{{ route('bus.update', $bus->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-body">
                                                    <h4 class="form-section">
                                                        <i class="icon-user"></i>Modifier le nombre de places
                                                    </h4>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="projectinput2"> Nombre de places : </label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="projectinput2" class="form-control"
                                                            name="Nbre_places" value="{{ $bus->Nbre_places}}">
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

