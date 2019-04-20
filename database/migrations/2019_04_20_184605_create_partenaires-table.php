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
            $table->integer('id_partenaire')->references('id')->on('users')->primary();
            $table->string('part_Name');
            $table->string('tel')->unique();
            $table->string('img');
            $table->double('taille', 15, 8)->unsigned();
            $table->double('poids', 15, 8)->unsigned();
            $table->date('date_de_naissance');
            $table->string('sexe');
            $table->string('pays');
            $table->string('diplome');
            $table->string('metier');
            $table->string('experience');
            $table->string('adresse');
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
