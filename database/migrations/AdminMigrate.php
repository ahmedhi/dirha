<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrateur', function (Blueprint $table) {
          $table->increments('id');
          $table->string('user_Name')->unique;
          $table->string('mot_de_passe');
          $table->string('nom');
          $table->string('prenom');
          $table->string('mail');
          $table->string('tel')->unique;
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
        Schema::dropIfExists('administrateur');
    }
}
