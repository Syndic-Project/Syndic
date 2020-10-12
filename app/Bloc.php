<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloc extends Model
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
