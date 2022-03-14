<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsuarioPermisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_permiso', function (Blueprint $table) {
            $table->id('usuper_id');
            // $table->foreignId('usu_id')->references('usu_id')->on('users');
            $table->foreignId('per_id')->references('per_id')->on('permiso');
            $table->foreignId('car_id')->references('car_id')->on('cargo');
        });      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_permiso');  

    }
}
