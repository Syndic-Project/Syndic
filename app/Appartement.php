<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_appartement
 * @property string $type_de_bien
 * @property int $nbr_max
 * @property string $nom_appartement
 * @property int $num_appartement
 */
class Appartement extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_appartement';

    /**
     * @var array
     */
    protected $fillable = ['type_de_bien', 'nbr_max', 'nom_appartement', 'num_appartement'];

}
