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
            $table->string('id_prop')->references('id')->on('users');
            $table->double('kcal',15,8)->unisgned();

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
