
@extends('Layouts/appLayout')

@section('style')
<link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
@endsection


@section('content')

<div class="content-page">

			
			
    <h2 class="padb20"><span class="nomimmeuble">EL MEDIOUNI</span> : GESTION DES APPARTEMENTS</h2>

<div class="row mybox mrgb20">
<div class="col-md-12">
<div class="text-center yellow pad10"><strong><i class="fa fa-arrow-down"></i> formulaire d'enregistrement des appartements <i class="fa fa-arrow-down"></i></strong></div>
<form id="form_appartement" data-parsley-validate="" method="post" action="" accept-charset="UTF-8" novalidate="">
    <div class="row mrgb10">
        <div class="col-md-12">
            <select name="immeuble" id="immeuble" required="" class="form-control input-sm parsley-success" data-parsley-id="2295">
                <option value="">IMMEUBLE</option>
                                            <option value="279" selected="">EL MEDIOUNI</option>
                                            <option value="280">amine</option>
                                    </select><ul class="parsley-errors-list" id="parsley-id-2295"></ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="type">Type du bien</label>
                                        <select name="type" id="type" class="form-control input-sm parsley-success" required="" data-parsley-id="8096">
<option value="1">Appartement</option>
<option value="2">Bureau</option>
<option value="3">Local commercial</option>
</select><ul class="parsley-errors-list" id="parsley-id-8096"></ul>					</div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="porte">N° de porte</label>
                <input type="text" required="" name="porte" id="porte" class="form-control input-sm parsley-error" placeholder="N° de porte" data-parsley-id="7785"><ul class="parsley-errors-list filled" id="parsley-id-7785"><li class="parsley-required">Ce champ est requis.</li></ul>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="last_cotisation">Dernier mois payé</label>
                <input type="text" required="" name="last_cotisation" id="last_cotisation" class="form-control input-sm parsley-error" placeholder="DERNIER MOIS PAYS" data-parsley-id="6168"><ul class="parsley-errors-list filled" id="parsley-id-6168"><li class="parsley-required">Ce champ est requis.</li></ul>
            </div>
        </div>
        <div class="col-md-3">
            <label for="tel">Tel. mobile</label>
            <div class="intl-tel-input">
                <input type="text" name="tel" id="tel" class="form-control input-sm" placeholder="TELEPHONE MOBILE" data-parsley-id="8446" autocomplete="off">
                <div class="flag-dropdown">
                    <div class="selected-flag" title="Morocco (‫المغرب‬‎): +212">
                        <div class="flag ma">
                            <div class="arrow">
                                </div>
                            </div>
                        </div>

                        
        </div>
    </div>
    <div class="row mrgb20">
        <div class="col-md-12">
            <button type="submit" id="ajouter" name="ajouter" class="btnnn btnnn-1 btn-block"><i class="fa fa-plus"></i> AJOUTER L'APPARTEMENT</button>
        </div>
    </div>
</form>
</div>
</div> <!-- .row -->

<div class="row mrgb10">
<div class="col-md-12 text-right" id="rowfiltre">
<form class="form-inline" id="frmfiltre" method="post" action="" accept-charset="UTF-8">
    <input type="hidden" name="imm_fltr" id="imm_fltr" value="279">
    <div class="form-group">
        <select name="s_filtre" id="s_filtre" class="form-control input-sm">
            <option value="">tous les appartements</option>
            <option value="retard">en retard de paiement</option>
            <option value="sscmpt">sans compte dans ZONESYNDIC.COM</option>
            <option value="avcmpt">avec compte dans ZONESYNDIC.COM</option>
            <option value="avance">paiement en avance</option>
        </select>
    </div>
    <div class="form-group">
        <select name="s_ordre" id="s_ordre" class="form-control input-sm">
            <option value="">ordre par defaut</option>
            <option value="sit_asc">Par situation de - à +</option>
            <option value="sit_des">Par situation de + à -</option>
        </select>
    </div>
    <button type="submit" class="btn btn-default btn-sm">lancer</button>
</form>
</div>
</div>

<div class="row">
<div class="col-md-12">

<div class="mybox" id="box_appartliste">
<table id="appartliste" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th>PROPRIETE</th>
            <th>SITUATION</th>
            <th>COMPTE</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
                                        <tr id="app1715">
                <td class="liblocal">Bureau N°5</td>
                <td class="situationlocal">
                    <span class="text-success">1 mois</span>
                </td>
                <td>
                    <a href="https://zonesyndic.com/syndic/utilisateurs/form"><i class="fa fa-plus"></i> créer</a>						</td>
                <td class="text-right">
                    <div class="btn-group" role="group">
                        <a href="https://zonesyndic.com/syndic/appartements/details/1715" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> détails</a>&nbsp;
                        <a href="#" class="btn btn-success btn-xs editajax" data-toggle="modal" data-target="#modalupdate" id="1715"><i class="fa fa-pencil"></i> modifier</a>
                    </div>
                    &nbsp;<a href="#" id="1715" class="btn btn-danger btn-xs supprimer"><i class="fa fa-times-circle"></i></a>
                </td>
            </tr>
                            <tr id="app1719" class="danger">
                <td class="liblocal">Appartement N°12</td>
                <td class="situationlocal">
                    <span class="text-danger">-6 mois</span>
                </td>
                <td>
                    <a href="https://zonesyndic.com/syndic/utilisateurs/form"><i class="fa fa-plus"></i> créer</a>						</td>
                <td class="text-right">
                    <div class="btn-group" role="group">
                        <a href="https://zonesyndic.com/syndic/appartements/details/1719" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> détails</a>&nbsp;
                        <a href="#" class="btn btn-success btn-xs editajax" data-toggle="modal" data-target="#modalupdate" id="1719"><i class="fa fa-pencil"></i> modifier</a>
                    </div>
                    &nbsp;<a href="#" id="1719" class="btn btn-danger btn-xs supprimer"><i class="fa fa-times-circle"></i></a>
                </td>
            </tr>
                                </tbody>
</table>
</div>

</div>
</div>

<!-- modal debut -->
<div class="modal fade" id="modalupdate" tabindex="-1" role="dialog" aria-labelledby="titre" aria-hidden="true">
</div>
<!-- modal fin -->

</div>

@endsection

@section('script')
<script src="{{ URL::asset('assets/js/addlocataire.js') }}"></script>
@endsection
