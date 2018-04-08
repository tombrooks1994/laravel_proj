<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{id}', function($id) {

	return view('newview');

});

Route::get('/post/{id}/{name}', function($id, $name) {

    return "This is post number: " . $id . $name;

});

Route::get('/test/example/tester', array('as'=>'admin_home', function(){

    $url = route('admin_home');

    return view('test');

}));

Route::get('/newpage/the/test/id', array('as' => 'newpage', function() {

    $url = route('newpage');

    return view('newpage');

}));