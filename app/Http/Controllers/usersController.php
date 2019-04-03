<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use File;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.home')->with('Users',User::all());
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user != null) {

            $this->validate($request,[
                'name' => 'required',
                'email' => 'required',
                'about_user' => 'required'
            ]);

            if ($request->hasFile('photo')) {
                /* Delete Old Image  */
                if ( $user->avatar != "default.jpg") {

                  $file_path = public_path('uploads\avatars\\' . $user->avatar);
                  if(File::exists($file_path)) File::delete($file_path);

                }
                /* Save New Image */
                $file = $request->photo ;
                $newName = time() . $file->getClientOriginalName();
                $file->move('uploads/avatars',$newName);
                $user->avatar = $newName ;

            }

            $user->name = $request->name ;
            $user->email = $request->email;
            $user->facebook = $request->facebook ;
            $user->github = $request->github ;
            $user->twitter = $request->twitter ;
            $user->about_user = $request->about_user;

            $user->save();

        }

        return redirect()->route('Users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user != null) {
            $user->delete();
        }
        return redirect()->back();
    }

    public function deleteAdmin($id){
        $user = User::find($id);
        if ($user != null) {
            $user->admin = 0 ;
            $user->save();
        }
        return redirect()->back();
    }

    public function MakeItAdmin($id){
        $user = User::find($id);
        if ($user != null) {
            $user->admin = 1 ;
            $user->save();
        }
        return redirect()->back();
    }
}
