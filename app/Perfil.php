<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    //
    protected $table = "perfis";
    protected $primaryKey = 'perfil_id';
    protected $fillable = ['nome'];
    
    public function GrupoPerfil()
    {
        return $this->belongsTo('App\GrupoPerfil');
    }
    
}
