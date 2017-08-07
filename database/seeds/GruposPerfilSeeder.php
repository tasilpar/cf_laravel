<?php

use App\GrupoPerfil;
use Illuminate\Database\Seeder;

class GruposPerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GrupoPerfil::truncate();
        factory('App\GrupoPerfil',20)->create();
    }
}
