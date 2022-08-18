<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissements', function (Blueprint $table) {
            $table->bigIncrements('id', true);
            $table->string('nom');
            $table->string('nom_proviseur');
            $table->string('email')->unique();
            $table->string('contact');
            $table->string('AnneeAcademique');
            $table->string('Adresse');
            $table->string('code_etablissement');
            $table->string('code_proviseur');
            $table->timestamps();
            $table->String('ville');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etablissements');
    }
}
