<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User();
        $usuario->username = 'dltunasd@gmail.com';
        $usuario->password = Hash::make('ola12345');
        $usuario->save();

        $usuario = new User();
        $usuario->username = 'salomon@gmail.com';
        $usuario->password = Hash::make('ola12345');
        $usuario->save();

        $usuario = new User();
        $usuario->username = 'israel@gmail.com';
        $usuario->password = Hash::make('ola12345');
        $usuario->save();


    }
}
