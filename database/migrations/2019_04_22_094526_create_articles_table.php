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
            $table->string('title')->default('Sans titre');
            $table->string('source')->default('Source Inconnu');
            $table->longText('description')->default('Article introuvable');
            $table->string('categorie')->default('Non définie');
            $table->integer('Like')->unsigned()->default('0');
            $table->integer('DisLike')->unsigned()->default('0');

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
