<?php

use App\Http\Controllers\RecordsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index' , [RecordsController::class, 'index']);
Route::post('/index' , [RecordsController::class, 'store']);
Route::get('/index/create', [RecordsController::class, 'create']);
Route::get('/index/{record}/edit' , [RecordsController::class, 'edit']);
Route::put('/index/{record}', [RecordsController::class, 'update']);
Route::delete('/index/{record}', [RecordsController::class, 'destroy']);