<?php

use App\Http\Controllers\BillController;
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

Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('search/{id}', [BillController::class,'search'])->name('search');
Route::middleware('auth')->group(function () {
    Route::get('upload', [BillController::class,'upload'])->name('billUpload');
    Route::get('billSearch', [BillController::class,'index'])->name('billSearch');
    route::get('dashbord', function () {
        return view('admin.dashbord');
    })->name('dashbord');
    Route::get('upload', function () {
        return view('bill.billUpload');
    });
});

Route::middleware('admin')->group(function () { 
    Route::resource('users', UserController::class);
});

