<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\Userscontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Student;

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
    return view('login');
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
        Route::get('/home' , 'home');
        Route::get('/user' , 'user');
        Route::get('/noaccess' , 'noaccess');
    });

Route::controller(PostController::class)->group(function (){
        Route::get('/post','getAllPost');
    });
    
Route::controller(CommentController::class)->group(function () {
    Route::get('/comment','getComment');
});

Route::controller(StudentController::class)->group(function () {
    Route::get('/student','student');
});