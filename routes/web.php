<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaffRoleController;
use App\Http\Controllers\SetPermissionController;
Auth::routes();

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


Auth::routes();

route::resource('/books',BookController::class);

route::get('/getBooks', [BookController ::class,'getIndex']);
route::get('/api/books', [BookController ::class,'bookApi']);
route::get('/view/book/{id}', [BookController::class,'readBook']);

route::get('/user/like/book/{boo_id}/{user_id}', [BookController::class,'userLikeBook']);
route::get('/user/favourite/book/{boo_id}/{user_id}', [BookController::class,'userFavouriteBook']);

route::post('/books/comment', [BookController::class,'userBookComment']);


route::get('/get_all', [BookController::class,'getAllBook']);
Route::get('/', [HomeController::class, 'index'])->name('home');

route::resource('/user',UserController::class);
route::get('/api/users', [UserController ::class,'userApi']);

route::get('/view/user/profile/{id}', [UserController ::class,'userProfile']);

//Role and Permission will be here
route::resource('/staff_role',StaffRoleController::class);
Route::get('/apiRole', [StaffRoleController::class,'apiRole']);

route::get('/role_permission/{id}',[SetPermissionController::class,'setPermission']);
route::resource('/role_permissions',SetPermissionController::class);



