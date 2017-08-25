<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      // Borramos los datos de la tabla
      DB::table('usuarios')->delete();

      $usuario = new usuario([
          'email'=>'example@gmail.com',
          'password'=>'password'
      ]);
      //guardamos los datos
      $usuario->save();

      $usuario = new usuario([
          'email'=>'admin@gmail.com',
          'password'=>'password'
      ]);
      //guardamos los datos
      $usuario->save();

    }
}
