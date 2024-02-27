<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;
    protected $table = 'transacciones';
    protected $guarded = [];
     //RELACIONES 
        
    //1:N
        public function usuarios()
        {
            return $this->hasMany(Usuario::class,'id_transaccion');
        }
}
