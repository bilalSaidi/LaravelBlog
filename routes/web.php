<?php


 use App\Mail\TestEmail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([ 'middleware' => 'auth'] , function(){



	Route::Pattern('id','[0-9]+'); // Except Only Number

  // Roting for login


	// Routing for Posts
	Route::get('/posts' , 'postController@index')->name('Posts');
	Route::get('/post/create' , 'postController@create')->name('post.create');
	Route::post('/post/store' , 'postController@store')->name('post.store');
	Route::get('/post/delete{id}' , 'postController@destroy')->name('post.delete');
	Route::get('/post/trashedPosts' , 'postController@trashed')->name('post.trashed');
	Route::get('/post/restore{id}' , 'postController@restore')->name('post.restore');
	Route::get('/post/hardDelete{id}' , 'postController@hardDelete')->name('post.hardDelete');
	Route::get('/post/edit/{id}' , 'postController@edit')->name('post.edit');
	Route::post('/post/update/{id}' , 'postController@update')->name('post.update');

	// Routing For Ctaegories

	Route::get('/categories' , 'CategoryController@index')->name('categories');
	Route::get('/category/create' , 'CategoryController@create')->name('category.create');
	Route::get('/category/edit/{id}' , 'CategoryController@edit')->name('category.edit');
	Route::get('/category/delete/{id}' , 'CategoryController@destroy')->name('category.delete');
	Route::post('/category/update/{id}' , 'CategoryController@update')->name('category.update');
	Route::post('/category/store' , 'CategoryController@store')->name('category.store');

	// Routing For tags

	Route::get('/tags' , 'tagsController@index')->name('tags');
	Route::get('/tags/create' , 'tagsController@create')->name('tags.create');
	Route::get('/tags/edit/{id}' , 'tagsController@edit')->name('tags.edit');
	Route::get('/tags/delete/{id}' , 'tagsController@destroy')->name('tags.delete');
	Route::post('/tags/update/{id}' , 'tagsController@update')->name('tags.update');
	Route::post('/tags/store' , 'tagsController@store')->name('tags.store');


	// Routing For Settings

	Route::get('/Settings' , 'settingController@index')->name('Settings');
	Route::post('/Settings/update/{id}' , 'settingController@update')->name('Settings.update');


	// Routing for Users
	Route::get('/Users','usersController@index')->name('Users');
	Route::get('/Users/edit/{id}','usersController@edit')->name('Users.edit');
	Route::get('/Users/delete/{id}','usersController@destroy')->name('Users.delete');
	Route::get('/Users/deleteAdmin/{id}','usersController@deleteAdmin')->name('Users.deleteAdmin');
	Route::get('/Users/MakeItAdmin/{id}','usersController@MakeItAdmin')->name('Users.MakeItAdmin');
	Route::post('/Users/update/{id}','usersController@update')->name('Users.update');


});

// Routing for siteUi
Route::get('/','siteUiController@index')->name('siteUi');
Route::get('/post/{id}','siteUiController@showPost')->name('siteUi.showPost');
Route::get('/ctaegory/{id}','siteUiController@showCategoty')->name('siteUi.catgory');
Route::get('/PostAuthor/{id}','siteUiController@showPostAuthor')->name('siteUi.PostAuthor');
Route::get('/tag/{id}','siteUiController@showTag')->name('siteUi.tag');
Route::get('/result','siteUiController@result')->name('resault');

Route::get('/contact','siteUiController@contatc')->name('siteUi.contatc');
Route::post('/sendMail','siteUiController@sendMail')->name('siteUi.sendMail');

Route::get('/sendemail' , function(){

		$data = array('name' =>  "bilalSaidi" );

		Mail::send('emails.test' , $data , function($message){
					$message->from('b.saidi@esi-sba.dz',"Hello Bilal") ;
					$message->to('bilal.saidibatna@gmail.com')->subject('This is Test Email ');
		});

		return "Your Email Has Been Send Successfully " ;


});


Route::get('/testMail' , function(){

	$data = ['message' => 'This is a test!'];

	Mail::to('bilal.saidibatna@gmail.com')->send(new TestEmail($data));
	return back();
})->name('testMail');
