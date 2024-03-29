<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

use App\Http\Controllers\RealEstateController;
use App\Http\Controllers\UploadController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/provinces', [ UserController::class , 'getProvinces' ]);
Route::get('/amphoes', [UserController::class , 'getAmphoes' ]);
Route::get('/tambons', [ UserController::class , 'getTambons' ]);
Route::get('/zipcodes', [UserController::class, 'getZipcodes'] );

Route::get('/admin/createRealEstate', [RealEstateController::class, 'getViewCreateRealEstate'])->name('admin.createRealEstate'); 
Route::post('/admin/createRealEstate/create', [RealEstateController::class, 'createNewRealEstate'])->name('admin.createRealEstate.create'); 
    