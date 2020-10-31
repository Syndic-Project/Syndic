<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property string $prenom
 * @property string $CIN
 * @property string $Tel
 * @property int $Nbr_Invite
 * @property string $email
 * @property string $created_at
 * @property string $updated_at
 * @property ConfirmLogment[] $confirmLogments
 */
class Locateur extends Model
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
    protected $fillable = ['nom', 'prenom', 'CIN', 'Tel', 'Nbr_Invite', 'email', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function confirmLogments()
    {
        return $this->hasMany('App\Models\Confirm_logment', 'id_Locateur');
    }
}
