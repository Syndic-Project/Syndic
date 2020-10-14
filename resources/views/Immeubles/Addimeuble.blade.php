@extends('Layouts/appLayout')

@section('style')
<link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('css')

@endsection

@section('content')

<div class="content-page">
  <div class="row mybox padb20 padt20 mrgb20">
    <div class="col-md-12">

      <form class="needs-validation" novalidate   method="POST"  action="{{route('immeubles.store')}}"  >
          @csrf

      <div class="row">
          <div class="col-md-6">
              <div class="form-group">

                  <label for="nom">NOM de l'immeuble</label>
                  <input type="text" name="nom" id="nom" class="form-control input-lg" required="" placeholder="NOM DE L'IMMEUBLE">
              </div>
              <div class="form-group">
                  <label for="cotisation">MONTANT de la cotisation mensuelle </label>
                  <input type="text" name="cotisation" id="cotisation" class="form-control" placeholder="MONTANT" required="" data-parsley-type="number">
              </div>


          </div>

          <div class="col-md-6">

              <div class="form-group">
                  <label for="bloc">Nom du Bloc</label>

                  <select name="bloc" id="bloc" class="form-control input-lg">
                      <option value="">Selectionnez le Bloc ou se Trouve l'immeuble</option>
                      @foreach ($blocs as $bloc )
                          <option value="{{$bloc->id}}">{{$bloc->nom_bloc}}</option>
                      @endforeach

                  </select>
              </div>

              <div class="form-group">
                  <label for="caisse">MONTANT disponible en caisse</label>
                  <input type="text" name="caisse" id="caisse" class="form-control" placeholder="MONTANT DISPONIBLE EN CAISSE" required="" data-parsley-type="number">
              </div>
          </div>
      </div>






        <p>&nbsp;</p>
        <button type="submit" class="btn btn-block btn-purple btn-lg ">ENREGISTRER et Passer aux Appartements <i class="fa fa-arrow-right"></i></button>

      </form>

    </div>
  </div>
</div>

@endsection




@section('script-bottom')
<!-- Validation init js-->
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection
