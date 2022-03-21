<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categoria')->insert(['cat_nombre'=>'Egresos','cat_descripcion'=>'administrador']);

        DB::table('categoria')->insert(['cat_nombre'=>'Ingresos','cat_descripcion'=>'Usuarios']);
    }
}
