<?php

use App\Http\Controllers\UserController;
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
    return view('user.index');
});

Route::get('/welcome', function () {
    return view('user.welcome');
})->name('user.welcome');
Route::get('/info', function () {
    return view('user.info');
})->name('user.info');
Route::get('/realEstate', function () {
    return view('realEstate');
});



Route::get('/admin', function () {
    return view('admin.index');
})->name('admin.index');
Route::get('/admin/realEstateList', function () {
    return view('admin.realEstateList');
})->name('admin.realEstateList');
Route::get('/admin/realEstateExpires', function () {
    return view('admin.realEstateExpires');
})->name('admin.realEstateExpires');



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
Route::post('/user', [UserController::class, 'popSearchRealEstate'])->name('user.index.select'); 
Route::get('/user/staff', [UserController::class, 'popAllStaff'])->name('user.staff');

Route::get('/private-videos/preview', 'VideoController@showPreviewVideo');


