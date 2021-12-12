<?php

namespace Database\Seeders;

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
        //
        $user = new User();
        $user->name = "Admin Global";
        $user->lastname = "School";
        $user->email = "admin@gmail.com";
        $user->password = Hash::make('123');
        $user->profile = 1;
        $user->state = 1;
        $user->save();
        // $user->assignRole('Admin_Global');

    }
}
