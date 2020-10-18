<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $Tel
 * @property string $CIN
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Caiss[] $caisses
 */
class Locataire extends Model
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
    protected $fillable = ['nom', 'prenom', 'email', 'email_verified_at', 'password', 'Tel', 'CIN', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caisses()
    {
        return $this->hasMany('App\Models\Caisse', 'id_Locataire');
    }
}
