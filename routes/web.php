<?php

use App\Http\Controllers\InvitedController;
use App\Http\Controllers\RegisterdController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function() {
    return view('welcome');
})->name('dashboard');


Route::group(['middleware' => ['auth','is_admin']], function() {
    Route::get('inviteds/export',   [InvitedController::class,'export'])->name('inviteds.export');
    Route::resource('inviteds',     InvitedController::class)->only('index','create','store');
    Route::get('registerds/export', [RegisterdController::class,'export'])->name('registerds.export');
    Route::resource('registerds',   RegisterdController::class)->only('index','edit','update');
});
Route::resource('registerds',   RegisterdController::class)->only('create','store');

require __DIR__.'/auth.php';
