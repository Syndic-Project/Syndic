@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css"/>
@endsection



@section('content')
    <div class="content-page">
        <form action="{{route('Facture.store') }}" method="POST">
            @csrf
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                                <h5 class="font-size-16 mb-1 mt-0">Ajouter vos Facture.</h5>
                                <p class="sub-header">

                                </p>
                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <label>Blocs</label>
                                            <select name="bloc" id="bloc"  class="form-control ">

                                                @foreach($blocs as $bloc)
                                                    <option value="{{$bloc->id}}"
                                                            selected="">{{$bloc->nom_bloc}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">

                                            <label>Type de Depense</label>
                                            <select name="type_facture" id="type_facture" class="form-control">

                                                <option value="1">Jardiange</option>
                                                <option value="2">Nettoyage</option>
                                                <option value="3">Divers</option>
                                                <option value="4">Securite</option>
                                            </select>

                                        </div>



                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="datep">Date de Paiment</label>
                                            <input type="date" required="" name="datep" id="datep"
                                                   class="form-control "/>
                                        </div>

                                        <div class="form-group">
                                            <label  for="Montant">Montant</label>
                                            <input type="text" required="" name="Montant" id="Montant"
                                                   class="form-control "/>
                                        </div>

                                    </div>


                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="designation">Designation</label>
                                            <input type="text" required="" name="designation" id="designation"
                                                   class="form-control "/>
                                        </div>

                                        <div class="form-group ">
                                            <label  for="example-fileinput">Recu</label>

                                                <input type="file" class="form-control" name="preuve" id="example-fileinput"/>

                                        </div>

                                    </div>

                                    <button type="submit" id="ajouter" name="ajouter" class="btn btn-block btn-purple "><i class="fa fa-plus"></i> AJOUTER </button>
                                </div>


                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>


@endsection




@section('script-bottom')
    <!-- Validation init js-->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection
