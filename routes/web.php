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
Route::get('/logout_admin','superAdminContoller@logout');
Route::get('/add-catagory','superAdminContoller@addCatagory');
Route::get('/manage-catagory','superAdminContoller@mangaeCatagory');
Route::get('/UnPublish-catagory/{id}','superAdminContoller@unpublish');
Route::get('/Publish-catagory/{id}','superAdminContoller@publish');
Route::get('/delete-catagory/{id}','superAdminContoller@deletecatgory');
Route::get('/edit-catagory/{id}','superAdminContoller@editCategory');
Route::post('/update-category/{id}','superAdminContoller@updateCategory');
Route::get('/bolg_details/{id}','BlogController@detailsBlog');
Route::get('/add-blog','superAdminContoller@addBlog');
Route::post('/save-blog','superAdminContoller@saveBlog');
Route::post('/user_commnets_save','BlogController@userCommemnets');
Route::get('/catagory_blog/{id}','BlogController@catagory_blog');
Route::post('/save-category','superAdminContoller@saveCategory');
Route::get('/manage-comments','superAdminContoller@mangaeComments');
Route::get('/UnPublish-comment/{id}','superAdminContoller@unpublishcomment');
Route::get('/Publish-comments/{id}','superAdminContoller@publishComments');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
