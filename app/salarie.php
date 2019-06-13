<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salarie extends Model
{

    protected $table = 'salarie';
    protected $primaryKey = 'id_salarie';
    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'date_naissance',
        'id_niveau',
        'id_suivi'
    ];  

    public $timestamps = false;

    public function getNiveau(){
        return niveau_etude::where('id_niveau', $this->id_niveau)->first()->designation;
    }

    public function getSuivi(){
        return suivi_salarie::where('id_suivi', $this->id_suivi)->first()->motivation;
    }
}
