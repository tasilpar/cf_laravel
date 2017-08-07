<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoPerfil extends Model
{
    //
    protected $table = "grupos_perfil";
    protected $primaryKey = 'grupo_perfil_id';
    public function Perfis()
    {
        return $this->hasMany('App\Perfil');
    }
}
