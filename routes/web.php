<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // Import Auth facade
use App\Http\Controllers\PostController; // Import PostController

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

Auth::routes(); // Ensure Auth facade is imported

Route::get('/home', function () {
    return view('home'); // Assurez-vous que le fichier home.blade.php existe
})->middleware('auth');
Route::resource('posts', PostController::class)->middleware('auth');

Route::resource('posts', PostController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
