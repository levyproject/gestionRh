<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class niveau_etude extends Model
{
    protected $table = 'niveau_etude';
    protected $primaryKey = 'id_niveau';
    protected $fillable = [
        'designation'
    ];  
}
