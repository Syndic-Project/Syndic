<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property integer $id_Immeuble
 * @property string $Type_du_bien
 * @property int $Nbr_Max_chambre
 * @property integer $id_Locataire
 * @property int $Num_Porte
 * @property string $Dernier_Mois_Pays
 * @property string $created_at
 * @property string $updated_at
 * @property Immeuble $immeuble
 * @property Locataire $locataire
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
    protected $fillable = ['nom', 'id_Immeuble', 'Type_du_bien', 'Nbr_Max_chambre', 'id_Locataire', 'Num_Porte', 'Dernier_Mois_Pays', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function immeuble()
    {
        return $this->belongsTo('App\Immeuble', 'id_Immeuble');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function locataire()
    {
        return $this->belongsTo('App\Locataire', 'id_Locataire');
    }
}
