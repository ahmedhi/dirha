<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repas', function (Blueprint $table) {
            $table->increments('id_repas');
            $table->string('nom');
            $table->string('id_utilisateur');
            $table->double('kcal',15,8);

            $table->primary('id_repas');
            $table->foreign('id_utilisateur')->references('id_user')->on('utilisateurs');

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
        Schema::dropIfExists('repas');
    }
}
