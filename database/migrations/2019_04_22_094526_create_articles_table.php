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
            $table->increments('article_id');
            $table->integer('partenaire_id');
            $table->string('title');
            $table->string('source');
            $table->string('description');
            $table->string('categorie');
            $table->integer('Like')->unsigned();
            $table->integer('DisLike')->unsigned();

            $table->unique('title');
            $table->foreign('partenaire_id')->references('partenaire_id')->on('partenaires');

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
