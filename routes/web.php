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


Route::get('/testmodel',function(){
	$query = App\Posts::all();
	return $query;
});

Route::get('/testmodel1',function(){
	$query1 = App\Post1::find(1);
	return $query1;
});

Route::get('/tugassiswa',function(){
	$query2 = App\Siswa::all();
	return $query2;
});