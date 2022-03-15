<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = User::create([
            'name' => 'Guille',
            'email' => 'guillermola40@educastur.es',
            'email_verified_at' => now(),
            'password' => Hash::make('guille')
        ]);
        $usuario->assignRole('admin');

        for($i=1; $i<10;){
            User::factory()->create()->assignRole('guest');
            $i++;
        }
    }
}
