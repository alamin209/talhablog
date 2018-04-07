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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','BlogController@index');
Route::get('/about-us','BlogController@aboutUs');

/*
 Admin panel
 */

Route::get('/admin-panel','adminController@index');
Route::post('/admin-login-check','adminController@adminLoginCheck');
Route::get('/dashboard','superAdminContoller@index');
Route::get('/logout','superAdminContoller@logout');
Route::get('/add-catagory','superAdminContoller@addCatagory');
Route::get('/manage-catagory','superAdminContoller@mangaeCatagory');
Route::post('/save-category','superAdminContoller@saveCategory');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
