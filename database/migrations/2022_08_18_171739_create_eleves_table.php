<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dateNaissance');
            $table->string('lieuNaissance');
            $table->string('genre');
            $table->string('email')->unique();
            $table->string('contact');
            $table->string('matricule');
            $table->string('code_eleve');
            $table->Integer('etablissement_id')->unsigned();
            $table->foreign('etablissement_id')->references('id')->on('etablissements')->onDelete('cascade'); 
            $table->Integer('AnneeAcademique')->unsigned();
            $table->foreign('AnneeAcademique')->references('id')->on('AnneeAcademique')->onDelete('cascade'); 
            $table->Integer('classe_id')->unsigned();
            $table->foreign('classe_id')->references('id')->on('classe_id')->onDelete('cascade'); 
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
        Schema::dropIfExists('eleves');
    }
}
