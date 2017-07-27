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

Auth::routes();

//Route Controller
Route::get('/home', 'HomeController@index')->name('home');

//Route Basic
Route::get('/imam', function(){
	return view('index');
});

// Route Parameter
Route::get('/halaman/{halamanku}', function($a){
	return 'Ini halaman ku '.$a;
});

Route::get('/kamu/{status?}/{gimana?}', function($status = null, $b = null){
	return '<center>Status Dia Apa yah.. : '.$status.
			'<br>Bagaimana Perasaan Kamu <b><center><b>'.$b;
});

// mencari semua model
Route::get('/tesmodel', function(){
	$query = App\Post::all();
	return $query;
});

//mencari model berdasarkan id
Route::get('/tesmodel1', function(){
	$query = App\Post::find(1);
	return $query;
});

//mencari model berdasarkan title
Route::get('/tesmodel2', function(){
	$query = App\Post::where('title','like','%haruskah menunda nikah?%')->get();
	return $query;
});

//mengubah record (hapus semua isi function)
Route::get('/tesmodel3', function(){
$post = App\Post::find(1);
$post->title = "Ciri Keluarga Sakinah";
$post->save();
return $post;
});

//Tugas
Route::get('/tugas', function(){
	$query = App\Siswa::all();
	return $query;
});