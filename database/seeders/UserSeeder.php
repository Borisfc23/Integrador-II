<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>"Administrador",
            'lastname'=>"Escobar",
            'dni'=>"74896523",
            'age'=>"50",
            'email'=>"administrador@correo.com",
            'password'=>bcrypt('12345678'),
        ])->assignRole("administrador");
        User::factory(5)->create();
    }
}