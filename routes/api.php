<?php

use App\Http\Controllers\API\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('student')->group(function () {
    Route::get('all', [StudentController::class, 'all'])->name('apistudent.all');
    Route::post('store', [StudentController::class, 'store'])->name('apistudent.store');
    Route::put('update', [StudentController::class, 'update'])->name('apistudent.update');
    Route::delete('delete', [StudentController::class, 'delete'])->name('apistudent.delete');
});
