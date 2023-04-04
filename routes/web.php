<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProbaController;
use App\Http\Controllers\HladnjaciController;
use App\Http\Controllers\DashboardController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

//Route::get('/proba', [ProbaController::class, 'index'])->name('proba');

Route::resource('/hladnjak', HladnjaciController::class)->names([
    'index'=>'hladnjak',
    'create'=>'hladnjak/create',
]);
Route::post('create', [HladnjaciController::class, 'store'])->name('proba.store');

Route::resource('/proba', ProbaController::class)->names([
    'index'=>'proba',
    'create'=>'proba/create',
]);
Route::get('linkstorage', function(){
    Artisan::call('storage:link');
});
//Route::post('create', [ProbaController::class, 'store'])->name('proba.store');

