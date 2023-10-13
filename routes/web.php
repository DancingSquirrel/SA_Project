<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RealEstateController;
use App\Models\RealEstate;
use Illuminate\Support\Facades\Route;
use App\Models\Tambon;

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
    return view('user.welcome');
});

Route::get('/welcome', function () {
    return view('user.welcome');
})->name('user.welcome');
Route::get('/info', function () {
    return view('user.info');
})->name('user.info');




Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');
Route::get('/admin/realEstateList', [RealEstateController::class, 'showRealEstate'])->name('admin.realEstateList');
Route::get('/admin/staffList', [UserController::class, 'popAllStaffList'])->name('admin.staffList');
Route::get('/admin/realEstateExpires', [RealEstateController::class, 'showRealEstatePrivate'])->name('admin.realEstateExpires');
Route::get('/admin/promoteList', [RealEstateController::class, 'popAllPromoteList'])->name('admin.promoteList');
Route::get('/admin/createRealEstate', [RealEstateController::class, 'getViewCreateRealEstate'])->name('admin.createRealEstate'); 
Route::post('/admin/createRealEstate/create', [RealEstateController::class, 'createNewRealEstate'])->name('admin.createRealEstate.create'); 


Route::get('/setting', function () {
    return view('setting.index');
})->name('setting.index');
Route::get('/setting/edit', function () {
    return view('setting.editProfile');
})->name('setting.editProfile');
Route::get('/setting/changePassword', function () {
    return view('setting.changePassword');
})->name('setting.changePassword');




Route::get('/user', [UserController::class, 'popRealEstate'])->name('user.index'); 
Route::get('/user/staff', [UserController::class, 'popAllStaff'])->name('user.staff');



Route::get('/realEstate/{realEstate}',[RealEstateController::class, 'selectRealEstate'])->name('realEstate');
