<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $id_bloc
 * @property string $nometprenom
 * @property string $email
 * @property string $password
 * @property string $created_at
 * @property string $updated_at
 * @property Bloc $bloc
 */
class Securite extends Model
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
    protected $fillable = ['id_bloc', 'nometprenom', 'email', 'password', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bloc()
    {
        return $this->belongsTo('App\Models\Bloc', 'id_bloc');
    }
}
