<?php

namespace App\Http\Controllers;

use App\Models\Juegos;
use Illuminate\Http\Request;

class UserJuegosController extends Controller
{
    public function mostrarJuegos()
    {
        $juegos = Juegos::paginate(10);
        return view("juegos.index", compact("juegos"));
    }

    public function mostrarPortadas()
    {
        $juegos = Juegos::paginate(10);
        return view("juegos.portadas", compact("juegos"));
    }

}
