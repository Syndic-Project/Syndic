@extends('Layouts/appLayout')
@section('content')



    <div class="container">
      <br />
      <h2>Modifier mon profil</h2>
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
          <div class="form-group">
            <label for="address">Addresse</label>
            <input type="text" class="form-control" id="address" />
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="checkbox_newsletter"
            />
            <label class="form-check-label" for="checkbox_newsletter">
              Je souhaite recevoir la newsletter
            </label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="first_name">Prénom</label>
            <input type="text" class="form-control" id="first_name" />
          </div>
          <div class="form-group">
            <label for="phone">Téléphone (Mobile)</label>
            <input type="text" class="form-control" id="phone" />
          </div>
          <div class="form-group">
            <label for="city">Ville</label>
            <input type="text" class="form-control" id="city" />
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="checkbox"
              value=""
              id="checkbox_partners"
            />
            <label class="form-check-label" for="checkbox_partners">
              Je souhaite recevoir la newsletter des partenaires
            </label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="about_me">Bio</label>
            <textarea class="form-control about_me" id="about_me"></textarea>
          </div>
          <div class="form-group">
            <label for="zip_code">Code Postal</label>
            <input type="text" class="form-control" id="zip_code" />
          </div>
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
 
  
@endsection