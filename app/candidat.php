<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class candidat extends Model
{
    protected $table = 'candidat';
    protected $primaryKey = 'id_candidat';
    protected $fillable = [
        'nom',
        'prenom',
        'annee_experience',
        'date_naissance',
        'pretention',
        'id_niveau'
    ];  

    public $timestamps = false;

    public function getNiveau(){
        return niveau_etude::where('id_niveau', $this->id_niveau)->first()->designation;
    }
}
