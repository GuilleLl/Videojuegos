<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Juegos extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre','Descripcion','Genero','Fecha_salida','Valoracion','Imagen'];

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
