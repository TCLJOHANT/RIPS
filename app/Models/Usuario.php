<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $guarded = [];
      //RELACIONES INVERSAS
    //1:N
    public function consultas(){
        return $this->hasMany(Consulta::class,'id_usuario');
    }
    public function urgencias(){
        return $this->hasMany(Urgencia::class,'id_usuario');
    }
    public function otrosServicios(){
        return ["servicio"=>"servicio"];
    }
    public function hospitalizaciones(){
        return $this->hasMany(Hospitalizacion::class,'id_usuario');
    }
    public function recienNacidos(){
        return $this->hasMany(RecienNacido::class,'id_usuario');
    }
    public function medicamentos(){
        return $this->hasMany(Medicamento::class,'id_usuario');
    }
    public function procedimientos(){
        return $this->hasMany(Procedimiento::class,'id_usuario');
    }
    

    //RELACIONES INVERSAS
    //1:N INVERSA
    // public function transaccion()
    // {
    //     return $this->belongsTo(Transaccion::class,'id_transaccion');
    // }
}
