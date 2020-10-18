<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $Date_Paiment
 * @property integer $id_Locataire
 * @property integer $id_Appartement
 * @property string $created_at
 * @property string $updated_at
 * @property float $montant
 * @property string $mois_concerne
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
    protected $fillable = ['Date_Paiment', 'id_Locataire', 'id_Appartement', 'created_at', 'updated_at', 'montant', 'mois_concerne'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function appartement()
    {
        return $this->belongsTo('App\Models\Appartement', 'id_Appartement');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function locataire()
    {
        return $this->belongsTo('App\Models\Locataire', 'id_Locataire');
    }
}
