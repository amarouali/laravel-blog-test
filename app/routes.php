<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
Route::get('cat/{id}', ['as'=>'cat', 'uses'=>'HomeController@index'])->where('id','[0-9]+');
Route::get('/', ['as'=>'home', 'uses'=>'HomeController@index']);
Route::get('show/{id}', ['as'=>'show', 'uses'=>'HomeController@show'])->where('id','[0-9]+');

View::composer('Elements.menu', function($view){
	 	$categories=array();	
	 	$cats =Categorie::all();
	 	foreach ($cats as $k=> $categorie) {
	 		$categories[$k]=array(
							'title'=>$categorie->title,
							'link'=>URL::route('cat',$categorie->id)		
	 						);
	 	}
		
		$view->with(array('categories'=> $categories));
		});


Route::get('login', array(
					'as'	=>'login',
					'uses'	=>'UsersController@login'
		));

Route::get('signup', array(
					'as'	=>'signup',
					'uses'	=>'UsersController@signup'
		));

Route::post('login', array(
					'before'=>'csrf',
					'as'	=>'login',
					'uses'	=>'UsersController@login'
		));
Route::post('signup', array(
					'as'	=>'signup',
					'uses'	=>'UsersController@signup'
		));

Route::get('logout', function(){
	Auth::logout();
	return Redirect::to('/')->with(['notif'=>['message'=>'Vous étes déconnecté','type'=>'success']]);

});



Route::post('addcomment', array(
					'before'=>'csrf',
					'as'	=>'addcomment',
					'uses'	=>'HomeController@addcomment'
		));


Route::get('profil', array(
					'as'	=>'profil',
					'uses'	=>'UsersController@signup'
		));



Route::group(array('prefix'=>'admin','before'=>['admin|auth']), function(){
		
		Route::get('dash', ['as'=>'dash','uses'=>'AdminController@dash']);

});
