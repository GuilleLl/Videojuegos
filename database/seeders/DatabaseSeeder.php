<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Juegos;

class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Juegos::create([
            'Nombre'=>'The Legend of Zelda',
            'Descripcion'=>'Juego de mundo abierto de la saga zelda',
            'Genero'=>'Fantasia',
            'Fecha_salida'=>'03/03/2017',
            'Valoracion'=>'8',
            'Imagen'=>'zelda.jpg',
        ]);
        Juegos::create([
            'Nombre'=>'The witcher 3',
            'Descripcion'=>'Juego basado en los libros de the witcher sobre un brujo',
            'Genero'=>'Fantasia',
            'Fecha_salida'=>'19/05/2015',
            'Valoracion'=>'9',
            'Imagen'=>'thewitcher3.jpg',
        ]);
        Juegos::create([
            'Nombre'=>'Dofus',
            'Descripcion'=>'Juego aburrido sobre muñecos aburridos',
            'Genero'=>'Rol',
            'Fecha_salida'=>'01/09/2004',
            'Valoracion'=>'0',
            'Imagen'=>'dofus.jpg',
        ]);
        Juegos::create([
            'Nombre'=>'Terraria',
            'Descripcion'=>'Juego de supervivencia en 2D',
            'Genero'=>'Supervivencia',
            'Fecha_salida'=>'03/03/2017',
            'Valoracion'=>'7',
            'Imagen'=>'terraria.jpg',
        ]);
        Juegos::create([
            'Nombre'=>'Elden Ring',
            'Descripcion'=>'Juego de mundo abierto de alta dificultad',
            'Genero'=>'Fantasia',
            'Fecha_salida'=>'25/02/2022',
            'Valoracion'=>'8',
            'Imagen'=>'eldenring.jpg',
        ]);
    }
}
