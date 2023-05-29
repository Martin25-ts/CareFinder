<?php

use App\Http\Controllers\PeopleController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [PeopleController::class,'index']);
Route::get('/register', [PeopleController::class,'register']);
Route::get('/register2', [PeopleController::class,'register2']);
Route::get('/login', [PeopleController::class,'login']);
Route::get('/backup-input-email', [PeopleController::class,'Backup_1']);
Route::get('/backup-verification-email', [PeopleController::class,'Backup_2']);
Route::get('/backup-confirm', [PeopleController::class,'Backup_3']);
