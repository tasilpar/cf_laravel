<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $primaryKey = 'usuario_id';
    protected $fillable = [
        'login',
        'senha',
        'usuario_ad'
        
        
    ];
    
   
    /*public function setSenhaAttribute($senha)
    {
        $this->attributes['senha'] = md5($senha);       
        
    }*/
    public function setAttribute($key, $value) {
        if($key == 'senha' ){
            
           $value = md5($value);
        }
        parent::setAttribute($key, $value);
    }   
}
