<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('perfis', function (Blueprint $table) {
            $table->increments('perfil_id');
            $table->string('nome',45);
            $table->integer('grupo_perfil_id')->unsigned();
            $table->foreign('grupo_perfil_id')->references('grupo_perfil_id')->on('grupos_perfil');
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
        Schema::drop('perfis');
    }
}
