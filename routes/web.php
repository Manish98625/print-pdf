<?php

use App\Http\Controllers\Admin\SettingCrudController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

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

Route::get('card',[FrontController::class,'index'])->name('card');
Route::get('setting/printpdf/{id}', [SettingCrudController::class,'pdf']);

