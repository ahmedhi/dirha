<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
      */
    public function up()
    {
        Schema::create('aliments', function (Blueprint $table) {
            $table->increments('aliment_id');
            $table->string('nom')->unique()->default('NULL');
            $table->double('energie_Kcal', 15, 8)->unsigned()->default(0);
            $table->double('proteines', 15, 8)->unsigned()->default(0);
            $table->double('glucides', 15, 8)->unsigned()->default(0);
            $table->double('lipides', 15, 8)->unsigned()->default(0);
            $table->double('fibres', 15, 8)->unsigned()->default(0);
            $table->integer('quantite')->unsigned()->default(0);
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
        Schema::dropIfExists('aliments');
    }
}
