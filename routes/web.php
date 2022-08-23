<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\FunctionController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/deposit',[FunctionController::class,'deposit'])->name('deposit');
Route::post('/deposit-submit',[FunctionController::class,'depositSave'])->name('deposit_post');


Route::post('/withdraw',[FunctionController::class,'withdraw'])->name('withdraw');
Route::post('/withdraw-submit',[FunctionController::class,'withdrawSave'])->name('withdraw_post');


Route::post('/transfer',[FunctionController::class,'transfer'])->name('transfer');
Route::post('/transfer-submit',[FunctionController::class,'transferSave'])->name('transfer_post');


Route::get('/statement',[FunctionController::class,'statement'])->name('statement');




