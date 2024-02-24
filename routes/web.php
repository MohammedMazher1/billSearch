<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;

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
})->name('home');

route::get('billSearch', function () {
    return view('bill.billSearch');
})->name('billSearch');
route::get('dashbord', function () {
    return view('admin.dashbord');
})->name('dashbord');
Route::get('upload', function () {
    return view('bill.billUpload');
});

Route::post('authenticate', [LoginController::class ,'authenticate'])->name('authenticate');
Route::get('login', [LoginController::class ,'index'])->name('login');
Route::get('logout', [LoginController::class ,'logout'])->name('logout');
Route::resource('users',UserController::class); 
