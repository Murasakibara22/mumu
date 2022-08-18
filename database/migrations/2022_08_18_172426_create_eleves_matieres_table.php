<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElevesMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves_matieres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('matiere_id')->unsigned();
            $table->foreign('matiere_id')->references('id')->on('matieres')->onDelete('cascade'); 
            $table->Integer('eleve_id')->unsigned();
            $table->foreign('eleve_id')->references('id')->on('eleves')->onDelete('cascade'); 
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
        Schema::dropIfExists('eleves_matieres');
    }
}
