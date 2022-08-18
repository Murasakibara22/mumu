<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantsEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignants_etablissements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('etablissement_id')->unsigned();
            $table->foreign('etablissement_id')->references('id')->on('etablissements')->onDelete('cascade'); 
            $table->Integer('enseignant_id')->unsigned();
            $table->foreign('enseignant_id')->references('id')->on('enseignants')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enseignants_etablissements');
    }
}
