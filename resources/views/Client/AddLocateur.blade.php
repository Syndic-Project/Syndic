@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css"/>
@endsection


@section('content')
    <div class="content-page">
        <form action="{{route('Locateur.store') }}" method="POST">
            @csrf
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h5 class="font-size-16 mb-1 mt-0">Ajouter un Locateur.</h5>
                            <p class="sub-header">

                            </p>
                            <div class="row">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input type="text" required="" name="nom" id="nom"
                                               class="form-control "/>
                                    </div>

                                    <div class="form-group">
                                        <label for="nom">Tel</label>
                                        <input type="Tel" required="" name="Tel" id="Tel"
                                               class="form-control "/>
                                    </div>


                                </div>

                                <div class="col-md-4">

                                    <div class="form-group">
                                        <label for="prenom">Prenom</label>
                                        <input type="text" required="" name="prenom" id="prenom"
                                               class="form-control "/>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" required="" name="email" id="email"
                                               class="form-control "/>
                                    </div>

                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cin">CIN</label>
                                        <input type="text" required="" name="cin" id="cin"
                                               class="form-control "/>
                                    </div>


                                    <div class="form-group">
                                        <label for="nbr">Nbr d'invite</label>
                                        <input type="text" required="" name="nbr" id="nbr"
                                               class="form-control "/>
                                    </div>


                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="dated">Date Debut</label>
                                        <input type="date" required="" name="dated" id="dated"
                                               class="form-control "/>
                                    </div>


                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="datef">Date Fin</label>
                                        <input type="date" required="" name="datef" id="datef"
                                               class="form-control "/>
                                    </div>


                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="id_app">Appartement</label>

                                        <select name="id_appartement" id="id_app" class="form-control">
                                            @foreach($appartements as $app)
                                            <option value="{{$app->id}}">{{$app->nom}}</option>
                                            @endforeach
                                        </select>

                                    </div>


                                </div>


                                <button type="submit" id="ajouter" name="ajouter" class="btn btn-block btn-purple "><i
                                        class="fa fa-plus"></i> AJOUTER
                                </button>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </form>

        <div class="visible-print text-center">


            {!! $data ?? '' !!}


        </div>
    </div>


@endsection




@section('script-bottom')
    <!-- Validation init js-->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection
