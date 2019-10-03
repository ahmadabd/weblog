<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class CreateUserAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'ahmadabd1374111@gmail.com',
            'password' => Hash::make('123456'),
            'remember_token' => Str::random(32)
        ]);
    }
}
