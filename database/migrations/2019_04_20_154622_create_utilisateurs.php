<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateurs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->integer('id_user')->references('id')->on('users')->primary();
            $table->string('user_Name')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel')->unique();
            $table->string('img');
            $table->double('taille', 15, 8)->unsigned();
            $table->double('poids', 15, 8)->unsigned();
            $table->date('date_de_naissance');
            $table->string('sexe');
            $table->string('pays');
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
