<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartenairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partenaires', function (Blueprint $table) {
            $table->integer('id_partenaire');
            $table->string('partenaire_Name');
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel');
            $table->string('img');
            $table->double('taille', 15, 8);
            $table->double('poids', 15, 8);
            $table->date('date_de_naissance');
            $table->string('sexe');
            $table->string('pays');
            $table->string('diplome');
            $table->string('metier');
            $table->string('experience');
            $table->string('adresse');

            $table->primary('id_partenaire');
            $table->unique('partenaire_Name');
            $table->unique('tel');
            $table->foreign('id_partenaire')->references('id')->on('users');

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
        Schema::dropIfExists('partenaires');
    }
}
