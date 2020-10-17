<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $date_de_paiment_facture
 * @property string $designation
 * @property float $Montant
 * @property string $preuve
 * @property integer $id_Recu
 * @property integer $id_Type_facture
 * @property string $created_at
 * @property string $updated_at
 * @property Recu $recu
 * @property TypeFacture $typeFacture
 */
class Facture extends Model
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
    protected $fillable = ['date_de_paiment_facture', 'designation', 'Montant', 'preuve', 'id_Recu', 'id_Type_facture', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function recu()
    {
        return $this->belongsTo('App\Models\Recu', 'id_Recu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typeFacture()
    {
        return $this->belongsTo('App\Models\TypeFacture', 'id_Type_facture');
    }
}
