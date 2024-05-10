<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\publi;
use App\Models\View;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.

     */
    public function run(): void{

        $view = new View;
        $view->name= 'autorizar';
        $view->save();

        $view = new View;
        $view->name= 'Denegar';
        $view->save();

        $role = new Role;
        $role->name= 'admin';
        $role->save();

        $role = new Role;
        $role->name= 'user';
        $role->save();

        $role = new Role;
        $role->name= 'none';
        $role->save();

        $user = new User;
        $user->name= 'Hector';
        $user->email= 'admin@test.com';
        $user->age= '22';
        $user->password= '12345';
        $user->role_id= 1;
        $user->view_id= 1;

        $user->save();

        $user = new User;
        $user->name= 'test';
        $user->email= 'test@test.com';
        $user->age= '22';
        $user->password= '12345';
        $user->role_id= 2;
        $user->view_id= 1;

        $user->save();

        $publi = new publi;
        $publi->title= 'dark souls';
        $publi->desc= 'Dark Souls es un juego de rol de acción creada por Hidetaka Miyazaki de FromSoftware y publicada por Bandai Namco Entertainment. La serie comenzó con el lanzamiento de Dark Souls en 2011 y tiene dos secuelas, Dark Souls II en 2014 y Dark Souls III en 2016';
        $publi->date= '2011-05-24';

        $publi->save();

    }
}
