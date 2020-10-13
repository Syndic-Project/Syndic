<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_ville
 * @property integer $id_syndic
 * @property string $nom_residence
 * @property string $adresse
 * @property string $created_at
 * @property string $updated_at
 * @property Syndic $syndic
 * @property Ville $ville
 * @property Bloc $bloc
 */
class Residence extends Model
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
    protected $fillable = ['id_ville', 'id_syndic', 'nom_residence', 'adresse', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function syndic()
    {
        return $this->belongsTo('App\Syndic', 'id_syndic');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ville()
    {
        return $this->belongsTo('App\Ville', 'id_ville');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bloc()
    {
        return $this->hasOne('App\Bloc', 'id_residence');
    }
}
