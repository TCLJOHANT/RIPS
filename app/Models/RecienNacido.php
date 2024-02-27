<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecienNacido extends Model
{
    use HasFactory;
    protected $table = "recien_nacidos";
    protected $guarded =[];
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}
