<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.

     */
    public function run(): void{

        $user = new User;
        $user->name= 'Hector';
        $user->email= 'admin@test.com';
        $user->age= '22';
        $user->password= '12345';
        $user->role= 'admin';

        $user->save();

        $user = new User;
        $user->name= 'test';
        $user->email= 'test@test.com';
        $user->age= '22';
        $user->password= '12345';
        $user->role= '';

        $user->save();

    }
}