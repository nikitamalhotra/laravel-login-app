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
	$user = Auth::user();
	if($user->isAdmin()){
		echo "Admin User";
	}
    //return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('admin/user/role', ['middleware' => ['role', 'auth', 'web'], function() {}]);  //For Multiple Middleware
Route::get('admin/user/role', ['middleware' => 'role', function() {
	return "Middleware Role";
}]);