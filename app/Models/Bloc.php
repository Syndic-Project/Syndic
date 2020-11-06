<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_residence
 * @property string $nom_bloc
 * @property string $created_at
 * @property string $updated_at
 * @property Residence $residence
 * @property Facture[] $factures
 * @property Immeuble[] $immeubles
 * @property Securite[] $securites
 */
class Bloc extends Model
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
    protected $fillable = ['id_residence', 'nom_bloc', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function residence()
    {
        return $this->belongsTo('App\Models\Residence', 'id_residence');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function factures()
    {
        return $this->hasMany('App\Models\Facture', 'id_bloc');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function immeubles()
    {
        return $this->hasMany('App\Models\Immeuble', 'id_bloc');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function securites()
    {
        return $this->hasMany('App\Models\Securite', 'id_bloc');
    }
}
