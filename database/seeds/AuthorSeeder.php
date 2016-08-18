<?php

use Illuminate\Database\Seeder;
use Dubium\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i<20; $i++){
    		Author::create([
	        	'name' 				=>	'Autor_'.$i,
	        	'fisrt_last_name'	=>	'Ruiz_'.$i,
	        	'second_last_name'	=>	'Bar_'.$i,
	        	'initials'			=>	'MR Bar_'.$i,
	        ]);
    	}
	        
    }
}
