<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Members;
use App\Http\Livewire\Permissions;
use App\Http\Livewire\Products;
use App\Http\Livewire\Roles;
use App\Http\Livewire\Users;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::group(['middleware' => ['auth']], function()  old grouping header
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::view('/dashboard','dashboard')->name('dashboard');
    Route::get('member', Members::class)->name('member');

    Route::get('roles', Roles::class)->name('role');
    Route::get('users', Users::class)->name('user');
    Route::get('products', Products::class)->name('product');
    Route::get('permissions', Permissions::class)->name('permission');
});
