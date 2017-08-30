<?php

use Illuminate\Database\Seeder;
use App\Usuario;
use App\Asignatura;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      // Borramos los datos de la tabla
      DB::table('usuario')->delete();

      /*$usuario = new Usuario([
          'email'=>'example@gmail.com',
          'password'=>'password'
      ]);
      //guardamos los datos
      $usuario->save();

      $usuario = new Usuario([
          'email'=>'admin@gmail.com',
          'password'=>'password'
      ]);
      //guardamos los datos
      $usuario->save();*/

      DB::table('usuario')->insert([
        'email'=>'example@gmail.com',
        'password'=>'password'
      ]);


    }
}
