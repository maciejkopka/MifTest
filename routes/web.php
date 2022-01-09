<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\UserController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/manageac', [App\Http\Controllers\ManageacController::class, 'manageac'])->name('manageac');

Route::get('/transfer', [App\Http\Controllers\TransferController::class, 'transfer'])->name('transfer');


//Wyświetlanie histori przelewów
Route::get('home', function () {

    $transferhistory = DB::table('Transfer')->get();

    return view('home', ['transferhistory' => $transferhistory]);
});

Route::get('insert', 'App\Http\Controllers\TransferController@transfer');
Route::post('create','App\Http\Controllers\TransferController@insert');

//Admin
Route::name('admin.')->middleware(['auth', 'auth.isAdmin'])->prefix('admin')->group(function(){
    Route::resource('/users', UserController::class);
}); 