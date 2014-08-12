<?php

use Diego\Blog\Models\Autor;

class AutorTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('autores')->delete();

        Autor::create(array(
        	'email' => 'foo@bar.com'
        ));
    }

}