<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserManagementController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/list-user',[UserManagementController::class,'index']);
Route::get('/create-user',[UserManagementController::class,'create']);
Route::post('/save-user',[UserManagementController::class,'store']);
Route::get('/edit-user/{id}',[UserManagementController::class,'show']);
Route::post('/update-user',[UserManagementController::class,'update']);
Route::get('/delete-user/{id}',[UserManagementController::class,'destroy']);
