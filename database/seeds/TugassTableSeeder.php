<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TugassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    	for ($i=0; $i < 15; $i++) { 
    		# code...
    		DB::table('tugass')->insert([
	        	'nama_matkul' => $faker->name,
	        	'judul_tugas' => $faker->name,
	        	'deadline' => $faker->date,
	        	'status' => 'Belum',
        	]);
    	}
    }
}
