<?php

use App\Http\Controllers\CompareController;
use Illuminate\Support\Facades\Auth;
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


        Route::middleware('login')->group(function(){
        Route::get('/', function () {
            return view('welcome');
        });
        
        Route::resource('/compare', CompareController::class);
        Route::post('/export-data', [CompareController::class, 'export'])->name('compare.export');
        Route::post('/truncate-data', [CompareController::class, 'truncate'])->name('compare.truncate');
        });
        Auth::routes();
    
    
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    


