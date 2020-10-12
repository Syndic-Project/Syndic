<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immeuble extends Model
{
    protected $fillable = ['Nom_Immeuble', 'id_ville', 'code_postal', 'Adresse', 'Montant_Cotisation_Mensuelle', 'Montant_Disponible_En_Caisse'];
}
