<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

/**
 * @property integer $id
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $Tel
 * @property string $CIN
 * @property boolean $isVisible
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Caiss[] $caisses
 */
class Locataire extends Model implements MustVerifyEmail
{
    use Notifiable;
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nom', 'prenom', 'email', 'email_verified_at', 'password', 'Tel', 'CIN', 'created_at', 'updated_at', 'isVisible'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caisses()
    {
        return $this->hasMany('App\Models\Caisse', 'id_Locataire');
    }
    public function hasVerifiedEmail()
    {
        // TODO: Implement hasVerifiedEmail() method.
        return !is_null($this->email_verified_at);
    }

    public function markEmailAsVerified()
    {
        return $this->forceFill([
            'email_verified_at' => $this->freshTimestamp(),
        ])->save();
    }

    public function sendEmailVerificationNotification()
    {
        // TODO: Implement sendEmailVerificationNotification() method.
    }

    public function getEmailForVerification()
    {
        // TODO: Implement getEmailForVerification() method.
    }

    // /**
    //  * Determine if the user has verified their email address.
    //  *
    //  * @return bool
    //  */
    // public function hasVerifiedEmail()
    // {
    //     return !is_null($this->email_verified_at);
    // }

    // /**
    //  * Mark the given user's email as verified.
    //  *
    //  * @return bool
    //  */
    // public function markEmailAsVerified()
    // {
    //     return $this->forceFill([
    //         'email_verified_at' => $this->freshTimestamp(),
    //     ])->save();
    // }

    // /**
    //  * Send the email verification notification.
    //  *
    //  * @return void
    //  */
    // public function sendEmailVerificationNotification()
    // {
    //     // $this->notify(new Notifications\VerifyEmail);
    // }
}
