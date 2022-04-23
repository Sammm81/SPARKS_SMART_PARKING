<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;

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

// PUBLIC ROUTES
Route::get('/', [PublicController::class, 'index']);
Route::get('/{page}', [PublicController::class, 'routes']);
Route::post('/register', [PublicController::class, 'register']);
Route::post('/login', [PublicController::class, 'login']);

// USER ROUTES
Route::get('/user/payment/{id}', [UserController::class, 'pay']);
Route::get('/user/{page}', [UserController::class, 'routes']);
Route::post('/user/category', [UserController::class, 'getCategory']);
Route::post('/user/area', [UserController::class, 'getAreaId']);
Route::post('/user/slot', [UserController::class, 'getSlotId']);
Route::post('/user/place', [UserController::class, 'getPlaceId']);
Route::post('/user/token', [UserController::class, 'verifyToken']);
Route::post('/user/topup', [UserController::class, 'topUp']);

// ADMIN ROUTES
Route::get('/admin/{page}', [AdminController::class, 'routes']);
Route::get('/admin/add/{page}', [AdminController::class, 'add']);
Route::get('/admin/edit/{page}/{id}', [AdminController::class, 'edit']);
Route::get('/admin/delete/{page}/{id}', [AdminController::class, 'delete']);

Route::post('/admin/add/{page}', [AdminController::class, 'addPost']);
Route::post('/admin/edit/{page}', [AdminController::class, 'editPost']);