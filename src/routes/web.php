<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [ContactController::class, 'index']);
Route::get('/login', [ContactController::class, 'login']);
Route::post('/login', [ContactController::class, 'login']);
Route::get('/register', [ContactController::class, 'register']);
Route::get('/confirm', [ContactController::class, 'confirm']);
Route::get('/thanks', [ContactController::class, 'thanks']);
Route::get('/admin', [ContactController::class, 'admin']);


Route::post('/create', [ContactController::class, 'create']);
Route::post('/store', [ContactController::class, 'store']);
Route::get('/delete', [ContactController::class, 'delete']);
Route::post('/remove', [ContactController::class, 'remove']);
Route::post('update', [ContactController::class, 'update']);