@extends('Layouts/appLayout')
@section('content')

<div class="content-page">

    <div class="container">
      <br />
      <h2>Ajouter un Locataire</h2>
      <div class="row justify-content-start">
        <div class="col-md-4">
          <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" />
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" />
          </div>
       
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="first_name">Prénom</label>
            <input type="text" class="form-control" id="first_name" />
          </div>
          <div class="form-group">
            <label for="pass">Mot de Passe</label>
            <input type="password" class="form-control" id="pass" />
          </div>
       
       
        </div>
        <div class="col-md-4">

          <div class="form-group">
            <label for="cin">CIN</label>
          <input type="text"  class="form-control" id="cin">
          </div>

          <div class="form-group">
            <label for="phone">Téléphone (Mobile)</label>
            <input type="text" class="form-control" id="phone" />
          </div>

        </div>

        
    </div>



{{-- /hanya tji liste boxe avec mlitiple selection liste la premiere liste doit etre rempli par les appartement qu on a 
parcequ on va affecter au locataire l' appartement directement --}}


       <div class="container">
           <div class="row">
            <div class="col-md-6">
                <p class="mb-1 font-weight-bold text-muted">cliquez pour lui affecter un local</p>
              

                <div   style="background: red">
                    <ul id="liste1">
                    <li class="items" id="" >item1</li>
                    <li   class="items" id="">item2</li>
               
                </ul>
                </div>
               

            </div> <!-- end col -->

            <div class="col-md-6">
                <p class="mb-1 font-weight-bold text-muted mt-3 mt-md-0">Les locaux affectés</p>
              

                <div  style="background: red" >
                    <ul id="liste2"> 
                    <li  class="items" id="">item3</li>
                    <li  class="items" id="">item4</li>
                </ul>
                     
                </div>
                
           

            </div> <!-- end col -->
        </div>
    </div>


      <div class="submit-button d-none d-md-block	">
        <button type="button" class="btn btn-purple btn-more-padding">
          Enregistrer mes modifications
        </button>
      </div>
      <div class="submit-button d-block d-md-none	">
        <button type="button" class="btn btn-block btn-purple">
          Enregistrer mes modifications
        </button>
      </div>
    </div>
</div>
  
@endsection

@section('script')
<script src="{{ URL::asset('assets/js/addlocataire.js') }}"></script>
@endsection
