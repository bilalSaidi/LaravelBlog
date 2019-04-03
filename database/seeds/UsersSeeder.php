<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <15 ; $i++) { 
        	$user = new User ; 

        	$user->name = 'User ' . rand (1,100);
        	$user->email = 'bilal'.rand(1,50) . '@gmail.com' ;
			$user->password =  bcrypt('123456789');
			$user->save();
	    }


    }
}
