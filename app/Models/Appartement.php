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
 * @property boolean $isVisible
 * @property Immeuble $immeuble
 * @property Caiss[] $caisses
 * @property ConfirmLogment[] $confirmLogments
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
    protected $fillable = ['nom', 'id_Immeuble', 'Type_du_bien', 'Nbr_Max_chambre', 'Num_Porte', 'created_at', 'updated_at', 'isVisible'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function immeuble()
    {
        return $this->belongsTo('App\Models\Immeuble', 'id_Immeuble');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caisses()
    {
        return $this->hasMany('App\Models\Caisse', 'id_Appartement');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function confirmLogments()
    {
        return $this->hasMany('App\Models\Confirm_logment', 'id_Appartement');
    }
}
