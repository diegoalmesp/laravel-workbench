<?php

use Illuminate\Database\Seeder;

class DbTableSeeder extends Seeder
{
	public function run()
	{
		$this->call('AutorTableSeeder');

		$this->command->info('Autor table seeded');

		$this->call('PostTableSeeder');

		$this->command->info('Post table seeded');
	}
}