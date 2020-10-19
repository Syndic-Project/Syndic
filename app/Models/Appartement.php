<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property integer $id_Immeuble
 * @property string $Type_du_bien
 * @property int $Nbr_Max_chambre
 * @property int $Num_Porte
 * @property string $Dernier_Mois_Pays
 * @property string $created_at
 * @property string $updated_at
 * @property Immeuble $immeuble
 * @property Locataire[] $locataires
 */
class Appartement extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nom', 'id_Immeuble', 'Type_du_bien', 'Nbr_Max_chambre', 'Num_Porte', 'Dernier_Mois_Pays', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function immeuble()
    {
        return $this->belongsTo('App\Models\Immeuble', 'id_Immeuble');
    }
}
