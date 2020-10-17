<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $Date_Paiment
 * @property string $Dernier_Mois_Paye
 * @property string $email
 * @property string $Nbr_Mois_Paye
 * @property string $MT_Paye
 * @property integer $id_Locataire
 * @property integer $id_Appartement
 * @property string $created_at
 * @property string $updated_at
 * @property Appartement $appartement
 * @property Locataire $locataire
 */
class Caisse extends Model
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
    protected $fillable = ['Date_Paiment', 'Dernier_Mois_Paye', 'email', 'Nbr_Mois_Paye', 'MT_Paye', 'id_Locataire', 'id_Appartement', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function appartement()
    {
        return $this->belongsTo('App\Appartement', 'id_Appartement');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function locataire()
    {
        return $this->belongsTo('App\Locataire', 'id_Locataire');
    }
}
