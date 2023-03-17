<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLoginController;

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

route::group(['middleware' => 'auth'], function () {
    
    route::post('user-logout', [UserLoginController::class, "logout" ])->name('logout.user');
});
route::group(['middleware' => 'guest'], function () {
   
    // login route 
    route::get('user-register', [UserLoginController::class, "registerPage" ])->name('register.page');
    route::post('user-register', [UserLoginController::class, "register" ])->name('register.user');
    route::post('user-login', [UserLoginController::class, "loginUser" ])->name('login.user');
    
    
    
});

Route::get('/', function () {
    return view('website.index');
})->name('website');



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
