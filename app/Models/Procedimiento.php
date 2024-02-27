<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedimiento extends Model
{
    use HasFactory;
    protected $table = "procedimientos";
    protected $guarded =[];
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}
