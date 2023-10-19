<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RealEstateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
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

Route::get('/user/welcome', function () {
    return view('user.welcome');
})->name('user.welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(\App\Http\Middleware\CheckBanned::class, 'auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/admin/realEstateList', [RealEstateController::class, 'showRealEstate'])->name('admin.realEstateList');
    Route::get('/admin/realEstateList/{realEstate}/delete', [RealEstateController::class, 'deleteRealEstate'])->name('admin.realEstateList.delete');

    Route::get('/admin/staffList', [UserController::class, 'popAllStaffList'])->name('admin.staffList');
    Route::get('/admin/staffList/{user_id}/banned', [UserController::class, 'bannedStatusUser'])->name('admin.staffList.banned');
    Route::get('/admin/staffList/{user_id}/unbanned', [UserController::class, 'unbannedStatusUser'])->name('admin.staffList.unbanned');

    Route::get('/admin/realEstateExpires', [RealEstateController::class, 'showRealEstatePrivate'])->name('admin.realEstateExpires');
    Route::get('/admin/promoteList', [RealEstateController::class, 'popAllPromoteList'])->name('admin.promoteList');
    Route::get('/admin/promoteList/{realEstate}/edit', [RealEstateController::class, 'getViewEditPromote'])->name('admin.promoteList.edit');
    Route::put('/admin/promoteList/{realEstate}', [RealEstateController::class, 'updatePromoteRealEstate'])->name('admin.updatePromoteRealEstate');

    Route::get('/admin/createRealEstate', [RealEstateController::class, 'getViewCreateRealEstate'])->name('admin.createRealEstate');
    Route::post('/admin/createRealEstate/make', [RealEstateController::class, 'createNewRealEstate'])->name('admin.createRealEstate.make');


    Route::get('/admin/createUser', [UserController::class, 'getViewCreateUser'])->name('admin.createUser');
    Route::post('/admin/createUser/create', [UserController::class, 'createNewCreateUser'])->name('admin.createUser.create');
    Route::get('/admin/editRealEstate/{realEstate}/edit', [RealEstateController::class, 'getViewEditRealEstate'])->name('admin.getViewEditRealEstate');
    Route::put('/admin/editRealEstate/{realEstate}', [RealEstateController::class, 'updateRealEstate'])->name('admin.updateRealEstate');
    Route::get('/admin/editRealEstate/{image_id}', [RealEstateController::class, 'deleteImagesRealEstate'])->name('admin.updateRealEstate.delete');


    // profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // setting
    Route::get('/setting', [UserController::class, 'getviewSettingUser'])->name('setting.index');
    Route::get('/setting/edit', [UserController::class, 'getEditviewSettingUser'])->name('setting.editProfile');
    Route::put('/setting/edit', [UserController::class, 'editUserInfo'])->name('setting.editProfile.edit');

    Route::get('/setting/changePassword', [UserController::class, 'getchangePasswordviewSettingUser'])->name('setting.changePassword');
    Route::put('/setting/changePassword/edit/password', [UserController::class, 'editUserPassword'])->name('setting.changePassword.edit');
});

Route::get('/info', function () {
    return view('user.info');
})->name('user.info');
Route::get('/user', [UserController::class, 'popRealEstate'])->name('user.index');
Route::get('/user/staff', [UserController::class, 'popAllStaff'])->name('user.staff');
Route::get('/realEstate/{realEstate}', [RealEstateController::class, 'selectRealEstate'])->name('realEstate');







require __DIR__ . '/auth.php';
