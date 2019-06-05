<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartenaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partenaires', function (Blueprint $table) {
            $table->integer('partenaire_id')->primary();
            $table->longText('diplome');
            $table->string('metier')->default('NULL');
            $table->longText('experience');
            $table->longText('adresse');
            $table->timestamps();
        });

        Schema::table('partenaires', function($table){

            $table->foreign('partenaire_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partenaires');
    }
}
