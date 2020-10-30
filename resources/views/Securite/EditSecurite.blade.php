@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="content-page">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-0">
{{--                            <h5 class="col-8 font-size-16 mb-3">Modifier un Securite.</h5>--}}
                            <div class="">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-outline-danger " style="font-weight: bolder;"
                               >



                                        <i class="fas fa-arrow-left"></i>
                                        Retourner à la liste des securités
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr>


                <form class="needs-validation" novalidate method="POST"
                      action="{{route('Securite.update',['Securite'=>$securite->id])}}">
                    @method('PUT')
                    @csrf
                    <div class="container">
                        <br/>
                        <div class="row justify-content-start">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Nom et Prenom</label>
                                    <input type="text" class="form-control" id="name" name="nom"
                                           value="{{$securite->nometprenom}}"/>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                           value="{{$securite->email}}"/>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="bloc">Bloc</label>
                                    <select name="bloc" id="" class="form-control">

                                            <option value="{{$securite->id_bloc}}">
                                                {{$securite->id_bloc}}
                                            </option>

                                    </select>
                                </div>
                                    <div class="form-group">
                                        <label for="pass">Mot de Passe</label>
                                        <input type="password" class="form-control" id="pass" name="mdp"
                                               value="{{$securite->password}}"/>
                                    </div>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection

