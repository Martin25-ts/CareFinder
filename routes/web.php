<?php

use App\Http\Controllers\PeopleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use APP\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/', [PeopleController::class,'index'])->name('/');
Route::get('/register', [PeopleController::class,'register']);
Route::get('/register2', [PeopleController::class,'register2']);
Route::get('/login', [AuthController::class,'loginpage']);
Route::get('/backup-input-email', [PeopleController::class,'Backup_1']);
Route::get('/backup-verification-email', [PeopleController::class,'Backup_2']);
Route::get('/backup-confirm', [PeopleController::class,'Backup_3']);
Route::get('/{name}-favorite',[PeopleController::class,'favorite']);
Route::get('/{name}-profile',[PeopleController::class,'profile']);
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/error', function () {
    return view('error');
})->name('error');


Route::post('register-page1-confirm-next',[PeopleController::class,'inputregister']);
Route::post('/login',[AuthController::class,'login']);
