<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class loginController extends Controller
{

    public function login(Request $request){

        if (Auth::attempt([
              'email' => $request->email ,
              'password'  => $request->password
          ])) {

              $user = User::where('email' , $request->email )->first();
              if ($user->count() > 0 ) {
                      if ($user->is_admin()) {
                          return redirect()->route('home')->with('case' , $user);
                      }else{
                            return redirect()->route('dashUser')->with('case' , $user );
                      }
              }else{
                return redirect()->route('register');
              }


        }
    }
}
