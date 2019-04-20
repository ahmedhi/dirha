<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id_menu');
            $table->string('nom');
            $table->integer('id_utilisateur');
            $table->integer('type_exercice');
            $table->integer('type_evolution');

            $table->primary('id_menu');
            $table->unique('nom');
            $table->foreign('id_menu')->references('id_user')->on('utilisateurs');

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
        Schema::dropIfExists('menu');
    }
}
