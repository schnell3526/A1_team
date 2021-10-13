<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\UserpageController;


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

Route::redirect('/', '/index');

Route::get('/index', [IndexController::class, 'index'])->name('index');

Route::get('/search', [IndexController::class, 'search'])->name('search');

Route::get('/{id}/view', [UserpageController::class, 'index'])->name('userpage.index');


Route::get('/logout', [IndexController::class, 'logout']);



Route::get('/mypage', [MypageController::class, 'index'])->name('mypage.index');
Route::get('/mypage/create', [MypageController::class, 'create'])->name('mypage.create');
Route::post('/mypage/store', [MypageController::class, 'store'])->name('mypage.store');

require __DIR__.'/auth.php';
