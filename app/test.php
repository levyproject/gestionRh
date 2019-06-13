<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
	protected $primaryKey = 'id';
    protected $table = 'test';
    protected $fillable = ['id', 'test'];
    public $timestamps = false;
    // protected $dates = ['finPeriode', 'debutPeriode'];
}

?>