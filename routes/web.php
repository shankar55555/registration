<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController; 

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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [HomeController::class, 'index']);  

// Route::get('/signup', [HomeController::class, 'signup']);       //->route('signup');  
Route::get('/signup', 'HomeController@signup');   
Route::get('/teacher-data', [TeacherController::class, 'show_data_teacher']);  
// login api in laravel

// php artisan crud:generate Posts --fields='title#string; content#text';  --view-path=admin --controller-namespace=App\\Http\\Controllers\\Admin --route-group=admin --form-helper=html

Route::resource('posts', 'App\Http\Controllers\PostsController');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
