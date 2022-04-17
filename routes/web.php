<?php

use Illuminate\Support\Facades\Route;
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
Route::get('/', [PublicController::class, 'index']);
Route::get('/about', [PublicController::class, 'about']);

Route::get('/blog', function(){
    return view('posts');
});

Route::get('/login', [PublicController::class, 'login']);
Route::get('/register', [PublicController::class, 'register']);

