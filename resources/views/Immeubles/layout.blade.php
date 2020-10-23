<div class="row">
    <div class="col-md-6">
        <div class="form-group">

            <label for="nom">NOM de l'immeuble</label>
            <input type="text" name="nom" id="nom" class="form-control input-lg" required=""
                   placeholder="NOM DE L'IMMEUBLE" value="{{$immeuble->Nom_Immeuble ?? null}}">
        </div>
        <div class="form-group">
            <label for="cotisation">MONTANT de la cotisation mensuelle </label>
            <input type="text" name="cotisation" id="cotisation" class="form-control"
                   placeholder="MONTANT" required="" data-parsley-type="number"
                   value="{{$immeuble->Montant_Cotisation_Mensuelle ?? null}}">
        </div>


    </div>

    <div class="col-md-6">

        <div class="form-group">
            <label for="bloc">Nom du Bloc</label>

            <select name="bloc" id="bloc" class="form-control input-lg">
                <option value="">Selectionnez le Bloc ou se Trouve l'immeuble</option>
                @foreach ($blocs as $bloc)
                    <option value="{{ $bloc->id ?? null }}">{{ $bloc->nom_bloc }}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="caisse">MONTANT disponible en caisse</label>
            <input type="text" name="caisse" id="caisse" class="form-control"
                   placeholder="MONTANT DISPONIBLE EN CAISSE" required=""
                   data-parsley-type="number"
                   value="{{$immeuble->Montant_Disponible_En_Caisse ?? null}}">
        </div>
    </div>
</div>


<p></p>
