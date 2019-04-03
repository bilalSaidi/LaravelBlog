<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;

class settingController extends Controller
{
    
		public function index(){

			return view('setting.index')->with('Setting' , Setting::first());

		}


		public function update(Request $request  , $id){

				$setting = Setting::find($id);

				$this->validate($request,[
						'BlogName' => 'required' , 
						'NameAdminBlog' => 'required' , 
						'email' => 'required' , 
						'adress' => 'required' , 

				]);


				$setting->BlogName = $request->BlogName ; 
				$setting->NameAdminBlog = $request->NameAdminBlog ; 
				$setting->email = $request->email ; 
				$setting->adress = $request->adress ; 

				$setting->save();

				return redirect()->route('Settings');
				 
			
		}



}
