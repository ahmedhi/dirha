<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('menu_id');
            $table->integer('type_repas')->default('0');
            $table->string('Nom_Menu')->default('NULL');
            $table->integer('proprietaire_id')->references('id')->on('users');
            $table->integer('type_exercice')->default('0');
            $table->integer('type_evolution')->default('0');
            $table->string('aliments')->default('NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
