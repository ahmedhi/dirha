<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->integer('id_admin');
            $table->string('admin_Name');
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel');
            $table->primary('id_admin');
            $table->unique('admin_Name');
            $table->unique('tel');
            $table->primary('id_admin');
            $table->foreign('id_admin')->references('id')->on('users');
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
        Schema::dropIfExists('admin');
    }
}
