<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FirstUserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/usert', function (Request $request) {
//     return $request->user();
// });

Route::controller(FirstUserController::class)->prefix('users')->group(function(){
    Route::get('/', 'index');
    Route::get('/add', 'store');
    Route::post('/insert','create');
    Route::get('/{id}','show');
});