<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnseignantMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enseignant_matieres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('matiere_id')->unsigned();
            $table->foreign('matiere_id')->references('id')->on('matieres')->onDelete('cascade'); 
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
        Schema::dropIfExists('enseignant_matieres');
    }
}
