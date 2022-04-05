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

Route::get('/about', function(){
    return view('About', [
        "name" => "Ayub Sarina Sinaga",
        "email" => "ayubsinaga2019@gmail.com",
        "image" => "ayub.jpg",
    ]);
});

Route::get('/blog', function(){
    return view('posts');
});

