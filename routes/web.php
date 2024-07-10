<?php

use App\Http\Controllers\registerController;
use App\Http\Controllers\Userscontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/showdata', [Userscontroller::class, 'showdata'])->name('datafech');

// Route::get('/user', [Userscontroller::class, 'index']);

Route::get('/welcome/add', [registerController::class, 'register'])->name('route.register');

Route::controller(Userscontroller::class)->group(function () {
        Route::get('/user','User');
        Route::get('/user-2' , 'index');
        
        Route::get('/login' , 'login');
        Route::post('login' , 'loginsubmit')->name('login.submit');
    }
);