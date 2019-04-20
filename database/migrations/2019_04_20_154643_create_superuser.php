<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuperuser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superuser', function (Blueprint $table) {
            $table->integer('id_su')->references('id')->on('users')->primary();
          $table->string('su_Name')->unique();
          $table->string('nom');
          $table->string('prenom');
          $table->string('tel')->unique();
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
        Schema::dropIfExists('superuser');
    }
}
