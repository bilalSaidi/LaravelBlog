<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Http\Request;
use App\Category;
use App\tags;
use App\Post;
use App\Setting;
use Auth;
class postController extends Controller

{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $currentUser = Auth::id();
      $posts = Post::where('user_id',$currentUser)->get();
      return view('post.home')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {

        if (count(Category::all()) == 0 )  {

            session()->flash('create_cat', 'You Should Be Full Category First !!');

            return redirect()->route('categories');

        }elseif (count(tags::all()) == 0) {
            session()->flash('create_tag', 'You Should Be Full Tags !!');
            return redirect()->route('tags');

        }{

            return view('post.create')->with([
                                    'categories' => Category::all() ,
                                    'tags' =>  tags::all()
                                ]);
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'photo' => 'required|image' ,
            'tags' => 'required' ,
            'author' => 'required'
        ]);

        $file = $request->photo ;
        $newName = time() . $file->getClientOriginalName();
        $file->move('uploads/posts',$newName);

        $post = Post::create([
            'title'       =>   $request->title,
            'category_id' =>   $request->category_id,
            'content'     =>   $request->content,
            'featrued'    =>   $newName ,
            'user_id' =>  $request->author

        ]) ;




        $post->tags()->attach($request->tags);

        return redirect()->back();

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       return view('post.edit')->with([
                'post' => Post::find($id) ,
                'categories' => Category::all() ,
                'tags' =>      Tags:: all()
       ]);
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

        $post = Post::find($id);

        $this->validate($request,[
            'title' => 'required',
            'category_id' => 'required',
            'content' => 'required',
            'tags' => 'required',
            'author' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            /* Delete Old Image  */
            $file_path = public_path('uploads\posts\\' . $post->featrued);
            if(File::exists($file_path)) File::delete($file_path);
            /* Save New Image */
            $file = $request->photo ;
            $newName = time() . $file->getClientOriginalName();
            $file->move('uploads/posts',$newName);
            $post->featrued = $newName ;

        }



        $post->title = $request->title ;
        $post->category_id = $request->category_id ;
        $post->content = $request->content ;
        $post->user_id =  $request->author;
        $post->save();
        $post->tags()->sync($request->tags);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }

    public function trashed(){
        $post = Post::onlyTrashed()->get();
        return view('post.trashed')->with('trashedPosts',$post);
    }

    public function restore($id){

        $post  = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        return redirect()->route('Posts');

    }

    public function hardDelete($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        if ($post->featrued) {

            $file_path = public_path('uploads\posts\\' . $post->featrued); ;
            if(File::exists($file_path)) File::delete($file_path);
        }

        $post->forceDelete();
        return redirect()->back();
    }
}
