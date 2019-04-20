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
            $table->increments('id_aliment');
            $table->string('icone');
            $table->string('nom');
            $table->double('energie_Kcal', 15, 8)->unsigned();
            $table->double('proteines', 15, 8)->unsigned();
            $table->double('glucides', 15, 8)->unsigned();
            $table->double('lipides', 15, 8)->unsigned();
            $table->double('fibres', 15, 8)->unsigned();
            $table->double('mineraux', 15, 8)->unsigned();
            $table->double('vitamines', 15, 8)->unsigned();

            $table->primary('id_su');
            $table->unique('nom');
            $table->unique('icone');
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
