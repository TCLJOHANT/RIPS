<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtroServicio extends Model
{
    use HasFactory;
    protected $table = "otros_servicios";
    protected $guarded =[];
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}
