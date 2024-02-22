<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

route::get('billSearch', function () {
    return view('bill.billSearch');
})->name('billSearch');
route::get('dashbord', function () {
    return view('admin.dashbord');
})->name('dashbord');
Route::get('upload', function () {
    return view('bill.billUpload');
});

Route::resource('users',UserController::class); 
