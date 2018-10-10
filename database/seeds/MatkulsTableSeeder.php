<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MatkulsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	for ($i=0; $i < 10; $i++) { 
    		# code...
    		DB::table('matkuls')->insert([
	        	'nama_matkul' => $faker->title,
	        	'dosen' => $faker->name,
	        	'sks' => 3,
        	]);
    	}
        

    }
}
