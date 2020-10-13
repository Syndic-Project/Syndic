<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom_ville
 * @property string $created_at
 * @property string $updated_at
 * @property Residence $residence
 */
class Ville extends Model
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
    protected $fillable = ['nom_ville', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function residence()
    {
        return $this->hasOne('App\Residence', 'id_ville');
    }
}
