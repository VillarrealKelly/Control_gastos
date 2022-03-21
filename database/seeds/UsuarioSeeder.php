<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert([
         	'usu_nombre'=>'administrador',
         	'usu_apellido'=>'Villarreal',
         	'usu_cedula'=>'1715093521',
         	'usu_email'=>'Kelly@gmail.com',
         	'password'=>bcrypt('1715093521'),
         	'created_at'=>date('Y-m-d H:i'),
         	
         ]);

    }
}
