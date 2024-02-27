<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urgencia extends Model
{
    use HasFactory;
    protected $table = "urgencias";
    protected $guarded =[];
    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}
