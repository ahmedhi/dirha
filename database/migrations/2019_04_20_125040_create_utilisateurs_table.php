<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->integer('id_user');
            $table->string('user_Name');
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel');
            $table->string('img');
            $table->double('taille', 15, 8);
            $table->double('poids', 15, 8);
            $table->date('date_de_naissance');
            $table->string('sexe');
            $table->string('pays');

            $table->primary('id_user');
            $table->unique('user_Name');
            $table->unique('tel');
            $table->foreign('id_user')->references('id')->on('users');

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
        Schema::dropIfExists('utilisateurs');
    }
}
