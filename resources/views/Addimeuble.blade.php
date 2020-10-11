@extends('Layouts/appLayout')

@section('style')
<link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('content')

<div class="content-page">
  <div class="row mybox padb20 padt20 mrgb20">
    <div class="col-md-12">
  
      <form action="https://zonesyndic.com/syndic/immeubles/nouveau" method="post" accept-charset="utf-8">			<div class="form-group">
          <label for="nom">NOM de l'immeuble</label>
          <input type="text" name="nom" id="nom" class="form-control input-lg" required="" placeholder="NOM DE L'IMMEUBLE">
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="ville">VILLE ou se trouve cet immeuble</label>
              <select name="ville" id="ville" class="form-control input-lg" required="">
                <option value="">la ville où se trouve l'immeuble</option>
                                <option value="5">Agadir</option>
                                <option value="6">Al Hocïema</option>
                                <option value="7">Béni Mellal</option>
                                <option value="4">Casablanca</option>
                                <option value="8">El Jadida</option>
                                <option value="9">Errachidia</option>
                                <option value="10">Fès</option>
                                <option value="2">Kénitra</option>
                                <option value="11">Khénifra</option>
                                <option value="12">Khouribga</option>
                                <option value="13">Larache</option>
                                <option value="14">Marrakech</option>
                                <option value="15">Meknès</option>
                                <option value="16">Nador</option>
                                <option value="17">Ouarzazate</option>
                                <option value="18">Oujda</option>
                                <option value="19">Rabat</option>
                                <option value="20">Safi</option>
                                <option value="3">Salé</option>
                                <option value="21">Settat</option>
                                <option value="22">Tanger</option>
                                <option value="23">Taza</option>
                                <option value="24">Tétouan</option>
                            </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="code_postal">CODE POSTAL</label>
              <input type="text" name="code_postal" id="code_postal" class="form-control input-lg" placeholder="CODE POSTAL" required="" data-parsley-type="number">
            </div>
          </div>
        </div>
  
        <div class="form-group">
          <label for="adresse">ADRESSE</label>
          <textarea name="adresse" id="adresse" class="form-control input-lg" rows="2" placeholder="ADRESSE DE L'IMMEUBLE"></textarea>
        </div>
  
        <div class="form-group">
          <label for="cotisation">MONTANT de la cotisation mensuelle </label>
          <input type="text" name="cotisation" id="cotisation" class="form-control" placeholder="MONTANT" required="" data-parsley-type="number">
        </div>
  
        <div class="form-group">
          <label for="caisse">MONTANT disponible en caisse</label>
          <input type="text" name="caisse" id="caisse" class="form-control" placeholder="MONTANT DISPONIBLE EN CAISSE" required="" data-parsley-type="number">
        </div>
  
        <p>&nbsp;</p>
        <button type="submit" class="btnnn btnnn-1 btnnn-lg btn-block">ENREGISTRER et passer aux appartements <i class="fa fa-arrow-right"></i></button>
      </form>
  
    </div>
  </div>
</div>
  
@endsection

@section('script')
<script src="{{ URL::asset('assets/js/addlocataire.js') }}"></script>
@endsection
