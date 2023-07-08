<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController; 
use App\Http\Controllers\PostController;

use App\Http\Middleware\UsersAuthentication;

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
    return view('mainPage');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/post', function () {
    return view('post');
});

Route::post("/register",[AuthenticationController::class,"Register"]);
Route::post("/login",[AuthenticationController::class,"Login"]);
Route::get("/logout",[AuthenticationController::class,"Logout"])-> middleware(UsersAuthentication::class);

Route::post("/createPost",[PostController::class,"CreatePost"])-> middleware(UsersAuthentication::class); 
Route::post("/ModificarPost/{id}",[PostController::class,"ModificarPost"])-> middleware(UsersAuthentication::class);
Route::get('/listPost',[PostController::class,"ListPost"]);