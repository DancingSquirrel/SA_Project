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
Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('user.welcome');
    });
    Route::get('/welcome', function () {
        return view('user.welcome');
    })->name('user.welcome');
    Route::get('/info', function () {
        return view('user.info');
    })->name('user.info');
    Route::get('/user', [UserController::class, 'popRealEstate'])->name('user.index'); 
    Route::get('/user/staff', [UserController::class, 'popAllStaff'])->name('user.staff');
    Route::get('/realEstate/{realEstate}',[RealEstateController::class, 'selectRealEstate'])->name('realEstate');
    // 
    Route::get('/admin/realEstateList', [RealEstateController::class, 'showRealEstate'])->name('admin.realEstateList');
        Route::get('/admin/staffList', [UserController::class, 'popAllStaffList'])->name('admin.staffList');
        Route::get('/admin/realEstateExpires', [RealEstateController::class, 'showRealEstatePrivate'])->name('admin.realEstateExpires');
        Route::get('/admin/promoteList', [RealEstateController::class, 'popAllPromoteList'])->name('admin.promoteList');
        Route::get('/admin/createRealEstate', [RealEstateController::class, 'getViewCreateRealEstate'])->name('admin.createRealEstate'); 
        Route::post('/admin/createRealEstate/create', [RealEstateController::class, 'createNewRealEstate'])->name('admin.createRealEstate.create'); 
        Route::get('/admin/createUser', [UserController::class, 'getViewCreateUser'])->name('admin.createUser'); 
        Route::post('/admin/createUser/create', [UserController::class, 'createNewCreateUser'])->name('admin.createUser.create'); 
        Route::get('/admin/editRealEstate/{realEstate}', [RealEstateController::class, 'getViewEditRealEstate'])->name('admin.getViewEditRealEstate'); 
        // profile
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        // setting
        Route::get('/setting', function () {
            return view('setting.index');
        })->name('setting.index');
        Route::get('/setting/edit', function () {
            return view('setting.editProfile');
        })->name('setting.editProfile');
        Route::get('/setting/changePassword', function () {
            return view('setting.changePassword');
        })->name('setting.changePassword');
    
    
        Route::get('/setting/changePassword', function () {
            return view('setting.changePassword');
        })->name('setting.changePassword');
        Route::get('/setting/changePassword', function () {
            return view('setting.changePassword');
        })->name('setting.changePassword');
    
        // 
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
    

    

Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->name('password.confirm');

Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

Route::put('password', [PasswordController::class, 'update'])->name('password.update');

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
    
});




Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});






require __DIR__.'/auth.php';








