<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo')->insert(['tip_descripcion'=>'Sueldo y Salarios']);
        DB::table('tipo')->insert(['tip_descripcion'=>'Ocio']);
        DB::table('tipo')->insert(['tip_descripcion'=>'Educacion']);
        DB::table('tipo')->insert(['tip_descripcion'=>'Alimentacion']);
        //
    }
}
