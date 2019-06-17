<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poste extends Model
{
    protected $table = 'poste';
    protected $primaryKey = 'id_poste';
    protected $fillable = [
        'intitule'
    ]; 
}
