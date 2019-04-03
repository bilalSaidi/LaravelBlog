<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tags;

class tagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tags.home')->with('tags' , tags::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vlidation = $request->validate([
                'name' => 'required'
        ]);

        $tag = new tags ;
        $tag->name =  $request->name ;
        $tag->save();
        return redirect()->route('tags');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myTag = tags::find($id);
        return view('tags.edit')->with('tag',$myTag);
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
        $this->validate($request , [
            'title' => 'required'
        ]);

        $tag =  tags::find($id) ;

        $tag->name = $request->title ;

        $tag->save();

        return  redirect()->route('tags');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del =  tags::find($id);
        $del->delete();
        return redirect()->back();
    }
}
