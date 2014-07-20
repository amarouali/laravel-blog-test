<?php 

Route::group(array('namespace' => 'Amar\Media\controllers','prefix'=>'media'), function()
{
	Route::get('test', 'MediasController@test');
	Route::get('index/{ref}/{ref_id}', ['as'=>'media/index','uses'=>'MediasController@index']);
	Route::get('upload/{ref}/{ref_id}', ['as'=>'media/upload','uses'=>'MediasController@upload']);
	Route::get('media', 'MediasController@media');
	Route::post('order', ['as'=>'media/order','uses'=>'MediasController@order']);
	Route::post('delete/{id}', ['as'=>'media/delete','uses'=>'MediasController@delete']);

});