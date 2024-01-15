<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\FirstUserController;

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


Route::controller(FirstUserController::class)->prefix('users')->group(function(){
    Route::get('/', 'index');
    Route::get('/add', 'show');
    Route::post('/insert','create');
    Route::get('/{id}','show');
});
