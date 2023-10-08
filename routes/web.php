<?php

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
    return view('welcome');
});

Route::get('/user', function () {
    $provinces = Tambon::select('province')->distinct()->get();
    $amphoes = Tambon::select('amphoe')->distinct()->get();
    $tambons = Tambon::select('tambon')->distinct()->get();
    return view('user.index', compact('provinces','amphoes','tambons'));
});


Route::get('/welcome', function () {
    return view('user.welcome');
});

Route::get('/private-videos/preview', 'VideoController@showPreviewVideo');
