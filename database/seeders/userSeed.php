<?php

namespace Database\Seeders;

use App\Models\tienda;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //cree admnistrador
        $user = new User();
        $user->name = "Admin ";
        $user->lastname = "Global";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make('123');
        $user->profile = 1;
        $user->state = 1;
        $user->save();
        // $user->assignRole('Admin_Global');

        //crear Tienda de prueba
        //creo usuario de prueba
        $user = new User();
        $user->name = "Brandon ";
        $user->lastname = "Llamas Larios";
        $user->email = "brandonllamaslarios@gmail.com";
        $user->password = Hash::make('123');
        $user->profile = 3;
        $user->state = 1;
        $user->save();
        //creo la tienda
        $detalle = new tienda();
        $detalle->id_user = $user->id;
        $detalle->name_parking = "Mi tienda Demo";
        $detalle->cellphoneparking = "00";
        $detalle->direction = "calle 104 3sur 64";
        $detalle->coordinate_x = " ";
        $detalle->coordinate_y = " ";
        $detalle->save();
    }
}
