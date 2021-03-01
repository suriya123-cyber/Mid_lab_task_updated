<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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
Route::get("login",[loginController::class,'index']);
Route::post("login",[loginController::class,'verify']);
Route::get("home",[HomeController::class,'index']);
Route::get("home",[HomeController::class,'create']);
Route::get("registration",[registrationController::class,'index']);
Route::get("/admin/create",[registrationController::class,'create']);
Route::get("/admin/create",[registrationController::class,'show']);
Route::get("/admin",[registrationController::class,'store']);
Route::post("/admin/reviews",[registrationController::class,'store']);
Route::get("/register",[registrationController::class,'create']);
Route::get("/register",[registrationController::class,'store']);
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
