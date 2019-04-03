<?php

use Illuminate\Database\Seeder;

use App\Setting ; 

class Settingseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    		$setting = new  Setting ; 
	    	$setting->BlogName = 'Laravel Blog'  ;
	    	$setting->NameAdminBlog = 'Saidi Bilal ' ;
	    	$setting->email = ' b.saidi@gmail.com' ;
	    	$setting->adress = 'Algeria,Batna,Djezzar' ;
	    	$setting->save();
    }

    
}
