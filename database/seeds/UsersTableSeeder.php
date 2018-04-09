<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
/**
* Agregamos un usuario nuevo a la base de datos.
*/
class UserTableSeeder extends Seeder {
    public function run(){
        User::create(array(
            'name'=> 'Administrator',
            'email'     => 'admin@admin.com',
            'password' => Hash::make('admin') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));
    }
}