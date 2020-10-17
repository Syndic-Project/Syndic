@extends('Layouts/appLayout')

@section('style')
<link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('content')

<div class="content-page">
    <form class="needs-validation" novalidate action="{{route('Locataire.store') }}" method="post" accept-charset="utf-8">
        @csrf
    <div class="container">
      <br/>
      <h2>Ajouter un Locataire</h2>
        <div class="row justify-content-start">
        <div class="col-md-4">
          <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="nom" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" />
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="first_name">Prénom</label>
            <input type="text" class="form-control" id="first_name"  name="prenom" />
          </div>
          <div class="form-group">
            <label for="pass">Mot de Passe</label>
            <input type="password" class="form-control" id="pass" name="mdp" />
          </div>


        </div>
        <div class="col-md-4">

          <div class="form-group">
            <label for="cin">CIN</label>
          <input type="text"  class="form-control" id="cin" name="cin">
          </div>

          <div class="form-group">
            <label for="phone">Téléphone (Mobile)</label>
            <input type="text" class="form-control" id="phone" name="tel" />
          </div>

        </div>



        <div class="container " >

            <div class="row">
             <div class="col-md-6" >
                 <p class="mb-1 font-weight-bold text-muted">Les locaux affectés</p>



<div class="form-group">

                         <select id="liste1"  class="form-control" name="non_affecter[]" multiple="">
                         @foreach($appartements as $app )


                                 <option class="items" value="{{$app->id}}">{{$app->nom}}</option>

                         @endforeach
                         </select>


</div>   <!-- end form froup -->
               <!-- end cms selectable -->


             </div> <!-- end col -->


            <div class="col-md-6" id="selected">
                 <div class="form-group" >
                 <p class="mb-1 font-weight-bold text-muted mt-3 mt-md-0">Les locaux affectés</p>

                     <div class="form-group">

                         <select id="liste2"  class="form-control" name="Affecter[]" multiple="">



                                 <option class="items" value=""></option>


                         </select>


     </div> <!-- end row des sselects -->
    </div> <!-- end container des selection  -->
    </div> <!-- end  justify-content-start -->


        <div class="submit-button d-none d-md-block	">
            <button type="submit" class="btn btn-purple btn-more-padding">
                Enregistrer
            </button>
        </div>


    </div>   <!-- end of big container -->

    </form>
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

