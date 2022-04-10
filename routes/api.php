<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MarchentController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PackageTypeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TypeMorphController;
use App\Http\Controllers\wilayaController;
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
    'middleware' => 'auth:api'
], function ($router) {

    Route::get('package', [PackageController::class, 'index'])->name('package.index');
    Route::get('package-type', [PackageTypeController::class, 'index'])->name('package-type.index');
    Route::get('order-status', [OrderStatusController::class, 'index'])->name('package-status.index');
    Route::get('order', [OrderController::class, 'index'])->name('order.index');
    // Route::resource('user', UserController::class)->only(
    //     'update'
    // );

});


Route::group([
    'middleware' => 'api',
    // 'middleware' => 'jwt.refresh',
    'prefix' => 'jwt'

], function ($router) {

    Route::post('login', [AuthController::class, 'login'])->name('api-login');
    Route::post('logout', [AuthController::class, 'logout'])->name('api-logout');
    Route::post('refresh-token', [AuthController::class, 'refresh'])->name('api-refresh');
    Route::post('me', [AuthController::class, 'me'])->name('api-me');
    // Route::patch('respondWithToken', [AuthController::class,'respondWithToken'])->name('api-respondWithToken');


});
// api/package

    //api/stock
    // Route::resource('stocks', StockController::class)->only(
    //     'index','show'
    // );

    Route::resource('type-morph', TypeMorphController::class)->only(
        'index'
    );


    Route::resource('agency', AgencyController::class)->only(
        'index','show','store','update'
    );

    Route::resource('wilaya', wilayaController::class)->only(
        'index'
    );

//api/stock
Route::resource('stocks', StockController::class)->only(
    'index','show','store','update'
);
Route::resource('employee', EmployeeController::class)->only(
    'index','show'
);
Route::resource('marchent', MarchentController::class)->only(
    'index','show'
);
Route::resource('role', RoleController::class)->only(
    'index'
);
Route::resource('user', UserController::class)->only(
    'update','store'
);
