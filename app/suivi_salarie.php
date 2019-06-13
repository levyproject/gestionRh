<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suivi_salarie extends Model
{
    protected $table = 'suivi_salarie';
    protected $primaryKey = 'id_suivi';
    protected $fillable = [
        'motivation'
    ];
}
