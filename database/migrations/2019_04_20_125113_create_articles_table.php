<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id_article');
            $table->integer('id_partenaire')->references('id')->on('partenaire');
            $table->string('titre');
            $table->string('source');
            $table->string('description');
            $table->string('categorie');
            $table->integer('Like')->unsigned();
            $table->integer('DisLike')->unsigned();

            $table->primary('id_article');
            $table->unique('title');
            $table->foreign('id_article')->references('id_partenaire')->on('partenaire');

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
        Schema::dropIfExists('articles');
    }
}
