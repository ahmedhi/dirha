<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlimentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliment', function (Blueprint $table) {
            $table->increments('id');
            //icone $table->string('icone')->unique;
            $table->string('nom')->unique;
            $table->double('energie_Kcal', 15, 8);
            $table->double('proteines', 15, 8);
            $table->double('glucides', 15, 8);
            $table->double('lipides', 15, 8);
            $table->double('fibres', 15, 8);
            $table->double('mineraux', 15, 8);
            $table->double('vitamines', 15, 8);
            $table->integer('like');
            $table->integer('Dislike');
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
        Schema::dropIfExists('aliment');
    }
}
