<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('users', function (Blueprint $table) {
            $table->id('usu_id');
            $table->string('usu_nombre');
            $table->string('usu_apellido');
            $table->string('usu_cedula')->unique();
            $table->string('usu_email')->unique();
            $table->string('password');
          //  $table->integer('usu_estado')->default(1);

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
         Schema::dropIfExists('users');  
    }
}
