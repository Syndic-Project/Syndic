<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $DateD
 * @property string $DateF
 * @property boolean $Accorder
 * @property integer $id_Locateur
 * @property integer $id_Appartement
 * @property string $created_at
 * @property string $updated_at
 * @property Appartement $appartement
 * @property Locateur $locateur
 */
class confirm_logment extends Model
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
    protected $fillable = ['DateD', 'DateF', 'Accorder', 'id_Locateur', 'id_Appartement', 'created_at', 'updated_at'];

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
    public function locateur()
    {
        return $this->belongsTo('App\Models\Locateur', 'id_Locateur');
    }
}
