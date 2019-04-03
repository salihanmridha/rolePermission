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

//all routes for admin
Route::group(['middleware' => ['auth']], function () {
  Route::get('/dashboard', 'Admin\Dashboard@index')->name('dashboard');

Route::group(['middleware' => ['permission:Add Post']], function () {
  Route::get('posts/create', 'Admin\PostController@create')->name('posts.create');
  Route::post('posts', 'Admin\PostController@store')->name('posts.store');
});

Route::group(['middleware' => ['permission:Edit Post']], function () {
  Route::get('posts/{post}/edit', 'Admin\PostController@edit')->name('posts.edit');
  Route::put('posts/{post}', 'Admin\PostController@update')->name('posts.update');
});

Route::group(['middleware' => ['permission:Delete Post']], function () {
  Route::delete('posts/{post}', 'Admin\PostController@destroy')->name('posts.destroy');
});

Route::group(['middleware' => ['permission:View Post|Add Post|Edit Post']], function () {
  Route::get('allpostlist', 'Admin\PostController@dashboardAllPost')->name('allposts');
});


//user management from admin routes
Route::get('createpermission', 'Admin\Roles_Permissions@create_permission')->name('createpermission');
Route::post('storepermission', 'Admin\Roles_Permissions@store_permission')->name('storepermission');

Route::get('createrole', 'Admin\Roles_Permissions@create')->name('createrole');
Route::post('storerole', 'Admin\Roles_Permissions@store')->name('storerole');

Route::get('createuser', 'Admin\UserController@create')->name('createuser');
Route::post('storeuser', 'Admin\UserController@store')->name('storeuser');
});


//all route for customer
//Route::get('/customer/dashboard', 'Customer\Dashboard@index')->name('customer.dashboard');
Route::get('/customer/login', 'CustomerAuth\LoginController@showLoginForm')->name('customerLogin');
Route::post('/customer/login', 'CustomerAuth\LoginController@login');

Route::post('/customer/logout', 'CustomerAuth\LoginController@logout')->name('customer.logout');

Route::group(['middleware' => ['customer']], function () {
  Route::get('/customer/dashboard', 'Customer\Dashboard@index')->name('customer.dashboard');

  //Managing route for customer posts
  Route::group(['middleware' => ['auth:customer', 'permission:Add Post']], function () {

  });

  Route::group(['middleware' => ['auth:customer', 'permission:Add Post']], function () {
    Route::get('/customer/posts-create', 'Customer\PostController@create')->name('customer.post.create');
    Route::post('/customer/posts-store', 'Customer\PostController@store')->name('customer.post.store');
  });

  Route::group(['middleware' => ['web', 'customer', 'auth:customer', 'permission:View Post']], function () {
    Route::get('/customer/allposts', 'Customer\PostController@index')->name('customer.post.all');
  });



  //managing routes for customer user
  Route::get('/customer/customer-create', 'Customer\UserController@create')->name('customer.user.create');
  Route::post('/customer/customer-store', 'Customer\UserController@store')->name('customer.user.store');

});
