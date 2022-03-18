<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([

    'middleware' => 'api',
    'prefix' => 'jwt'

], function ($router) {

    Route::post('login', [AuthController::class,'login'])->name('api-login');
    Route::post('logout', [AuthController::class,'logout'])->name('api-logout');
    Route::post('refresh', [AuthController::class,'refresh'])->name('api-refresh');
    Route::post('me', [AuthController::class,'me'])->name('api-me');
    Route::get('test', [AuthController::class,'test'])->name('api-test');

});
// api/package
Route::get('package',[PackageController::class,'index'])->name('package.index');
Route::get('order',[OrderController::class,'index'])->name('order.index');

