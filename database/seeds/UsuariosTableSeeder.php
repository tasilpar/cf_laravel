<?php

use Illuminate\Database\Seeder;
use \App\Usuario;
class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Usuario::truncate();
        factory('App\Usuario',20)->create();
    }
}
