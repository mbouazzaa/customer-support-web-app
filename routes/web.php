<?php

use App\Http\Middleware\AdminCheck;
use Illuminate\Support\Facades\Route;

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

Route::prefix('app')->middleware([AdminCheck::class])->group(function(){

    Route::post('/create_user', 'AdminController@createUser');
    Route::get('/get_users', 'AdminController@getUsers');
    Route::post('/edit_user', 'AdminController@editUser');
    Route::post('/admin_login', 'AdminController@adminLogin');

    //  roles routes
    Route::post('create_role', 'AdminController@addRole');
    Route::get('get_roles', 'AdminController@getRoles');
    Route::post('edit_role', 'AdminController@editRole');
    Route::post('assign_roles', 'AdminController@assignRole');


});



Route::get('/logout', 'AdminController@logout');
Route::get('/', 'AdminController@index');
Route::any('{slug}', 'AdminController@index');


// Route::get('/', function(){
//     return view('welcome');
// });
// Route::get('/', function(){
//     return view('welcome');
// });
// Route::any('{slug}', function(){
//     return view('welcome');
// });
