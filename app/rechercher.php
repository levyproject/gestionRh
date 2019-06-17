<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rechercher extends Model
{
    protected $table = 'rechercher';
    protected $fillable = [
        'id_candidat',
        'id_poste',
        'id_type_contrat'
    ];  
}
