<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Setting;
use App\Category;
use App\Post;
use App\tags;
use App\User;

class siteUiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return view('siteUi.index')->with([
                                          'blogName'=> Setting::all()->first() ,
                                          'firstPost' => Post::orderBy('created_at','desc')->first(),
                                          'secondPost' =>Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first(),
                                          'thirdPost' =>Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first(),
                                          'posts' => Post::all() ,
                                          'categoryies' => Category::all(),
                                          'tags' => tags::all() ,
                                          'popPost' => Post::orderBy('id','ASC')->take(4)->get(),
                                          'webdev' => Category::find(2),
                                          'anddev' => Category::find(4),
                                          'bcdev' => Category::find(6)
                                     ]);
    }


    public function showPost($id){

      $mypost = Post::find($id);
      $nextMyPost = Post::where('id' , '>' , $mypost->id)->max('id');
      $previousPost = Post::where('id' , '<' , $mypost->id)->min('id');


      return view('siteUi.blog-post')->with([
                                        'blogName'=> Setting::all()->first() ,
                                        'categoryies' => Category::all(),
                                        'myPost' => $mypost ,
                                        'nextPost' =>  Post::find($nextMyPost) ,
                                        'previousPost' => Post::find($previousPost),
                                        'tags' => tags::all()


                                   ]);

    }


    public function showCategoty($id){

        $myCat = Category::find($id)->posts();
        $NameCate =  Category::find($id);

        return view('siteUi.category')->with([
                                          'blogName'=> Setting::all()->first() ,
                                          'categoryies' => Category::all(),
                                          'tags' => tags::all(),
                                          'Cat' => $myCat ,
                                          'Name' =>   $NameCate
                                      ]);



    }

    public function showPostAuthor($id){

        $myCat = User::find($id)->posts();
        $author = User::find($id);

        return view('siteUi.author')->with([
                                          'blogName'=> Setting::all()->first() ,
                                          'categoryies' => Category::all(),
                                          'tags' => tags::all(),
                                          'Cat' => $myCat ,
                                          'author' => $author
                                      ]);



    }


    public function showTag($id){

        $mytag = tags::find($id);
        return view('siteUi.tags-post')->with([

            'blogName'=> Setting::all()->first() ,
            'categoryies' => Category::all(),
            'tags' => tags::all(),
            'Tag' => $mytag


        ]);


    }




    public function result(){

        $wordSearch =request('search') ;
        $mypost = Post::where('title', 'like', "%".$wordSearch."%")->get();


        return view('siteUi.resault')->with([

          'Posts' => $mypost ,
          'wordSearch' => $wordSearch ,
          'blogName'=> Setting::all()->first() ,
          'categoryies' => Category::all(),
          'tags' => tags::all()
        ]);



    }

    public function contatc(){
      return view('siteUi.contact')->with([
                                        'blogName'=> Setting::all()->first() ,
                                        'categoryies' => Category::all(),
                                        'tags' => tags::all() ,

                                   ]);

    }


    public function sendMail(Request $Request){

        $this->validate($Request,[
            'name' => 'required' ,
            'message' => 'required'
        ]);

    }


}
