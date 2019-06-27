<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('email')->unique();
            $table->string('mot_de_passe');
            $table->string('nom');
            $table->string('tel')->default('NULL');
            $table->string('img')->default('NULL');
            $table->double('taille', 15, 8)->unsigned();
            $table->double('poids', 15, 8)->unsigned();
            $table->date('date_de_naissance');
            $table->string('sexe')->default('NULL');
            $table->string('pays')->default('NULL');
            $table->integer('type');
            $table->integer('TypeEvolution')->default('0');
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
        Schema::dropIfExists('users');
    }
}
