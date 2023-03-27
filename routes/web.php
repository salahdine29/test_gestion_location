<?php

use App\Http\Controllers\dashbord\DashbordController;
use App\Http\Controllers\dashbord\ProfileController;
use App\Http\Controllers\dashbord\SettingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware'=>'auth','prefix'=>'dashbord'],function(){
    //dashbord
    Route::get('/', [DashbordController::class,'index'])->name('dashbord.index');
    //settings
    Route::get('/setting',[SettingController::class,'index'])->name('dashbord.setting');
    Route::put('/setting/{id}/update',[SettingController::class,'update'])->name('setting.update');
    //profile
    Route::get('/profile',[ProfileController::class,'index'])->name('dashbord.profile');

});


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
