<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salarie', function (Blueprint $table) {
            $table->increments('id_salarie');
            $table->string('nom');
            $table->string('prenom');
            $table->char('sexe');
            $table->date('date_naissance');
            $table->foreign('id_niveau');
            $table->foreign('id_suivi');
        });
    }
}
