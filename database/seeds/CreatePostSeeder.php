<?php

use Illuminate\Database\Seeder;

class CreatePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('posts')->insert([
    		['titulo' => 'Mi titulo 1', 'contenido' => 'Mi contenido 1', 'activo'=>true],
    		['titulo' => 'Mi titulo 1', 'contenido' => 'Mi contenido 1', 'activo'=>true],
    		['titulo' => 'Mi titulo 1', 'contenido' => 'Mi contenido 1', 'activo'=>true],
    		['titulo' => 'Mi titulo 1', 'contenido' => 'Mi contenido 1', 'activo'=>false],
    		['titulo' => 'Mi titulo 1', 'contenido' => 'Mi contenido 1', 'activo'=>false],
    		]);
    }
}
