<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuperuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superuser', function (Blueprint $table) {
            $table->integer('id_su');
            $table->string('su_Name');
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel');

            $table->primary('id_su');
            $table->unique('su_Name');
            $table->unique('tel');
            $table->foreign('su_admin')->references('id')->on('users');
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
