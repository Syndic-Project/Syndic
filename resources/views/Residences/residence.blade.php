@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('css')

@endsection

@section('content')
    @if (session()->has('status'))
        <h2>{{session()->get('status')}}</h2>

    @endif
    <div class="content-page">
        <div class="row mybox padb20 padt20 mrgb20">
            <div class="col-md-12">

                <form class="needs-validation" novalidate action="{{route('immeubles.store') }}" method="post" accept-charset="utf-8">
                    <div class="form-group">
                        @csrf
                        <label for="nom">NOM de Résidence</label>
                        <input type="text" name="nom" id="nom" class="form-control input-lg" required="" placeholder="NOM DE Résidence">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ville">VILLE ou se trouve cet immeuble</label>

                                <select name="ville" id="ville" class="form-control input-lg" >
                                    <option value="">la ville où se trouve l'immeuble</option>

                                    @foreach ($villes as $ville )
                                        <option value="{{$ville->id}}">{{$ville->nom_ville}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="code_postal">CODE POSTAL</label>
                                <input type="text" name="code_postal" id="code_postal" class="form-control input-lg" placeholder="CODE POSTAL" required="" data-parsley-type="number">
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                                <div class="invalid-tooltip">
                                    Entrer votre code postal.
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="adresse">ADRESSE</label>
                        <textarea name="adresse" id="adresse" class="form-control input-lg" rows="2" placeholder="ADRESSE DE L'IMMEUBLE"></textarea>
                    </div>



                    <p>&nbsp;</p>
                    <button type="submit" class="btn btn-block btn-purple btn-lg ">ENREGISTRER et Passer aux Appartements <i class="fa fa-arrow-right"></i></button>

                </form>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ URL::asset('assets/js/addlocataire.js') }}"></script>
@endsection
@section('script')
    <!-- Plugin js-->
    <script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
@endsection

@section('script-bottom')
    <!-- Validation init js-->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection
