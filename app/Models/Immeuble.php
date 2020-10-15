<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_bloc
 * @property string $Nom_Immeuble
 * @property float $Montant_Cotisation_Mensuelle
 * @property float $Montant_Disponible_En_Caisse
 * @property string $created_at
 * @property string $updated_at
 * @property Bloc $bloc
 * @property Appartement $appartement
 */
class Immeuble extends Model
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
    protected $fillable = ['id_bloc', 'Nom_Immeuble', 'Montant_Cotisation_Mensuelle', 'Montant_Disponible_En_Caisse', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bloc()
    {
        return $this->belongsTo('App\Bloc', 'id_bloc');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function appartement()
    {
        return $this->hasMany('App\Appartement', 'id_Immeuble');
    }
}
