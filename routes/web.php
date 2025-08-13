<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\SpouseOtherController;

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
Route::prefix('auth')->group(function(){
    Route::controller(App\Http\Controllers\SpouseController::class)->group(function(){
        Route::get('spouse', 'index')->name('spouse.index');
        Route::get('spouse/create', 'create');
        Route::post('spouse', 'store');
    });
    Route::controller(App\Http\Controllers\Auth\RegisterController::class)->group(function(){
        Route::get('auth', 'index')->name('auth.index');
         Route::get('auth/register', 'display');
        
         Route::post('register', 'store');
        });
    });
Route::group(['middleware' => ['auth','admin']], function(){
Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/role-register','App\Http\Controllers\Admin\DashboardController@registered');
    Route::get('/role-edit/{id}', 'App\Http\Controllers\Admin\DashboardController@registerededit');
    Route::put('/role-register-update/{id}', 'App\Http\Controllers\Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}', 'App\Http\Controllers\Admin\DashboardController@registerdelete');
    Route::get('/aboutus', 'App\Http\Controllers\Admin\AboutusController@index');
    Route::post('/save-aboutus','App\Http\Controllers\Admin\AboutusController@store');
    Route::get('/aboutus-edit/{id}', 'App\Http\Controllers\Admin\AboutusController@edit');
    Route::put('/aboutus-update/{id}', 'App\Http\Controllers\Admin\AboutusController@update');
    Route::delete('/aboutus-delete/{id}', 'App\Http\Controllers\Admin\AboutusController@delete');
});
Route::resource('users', UserController::class);
Route::resource('spouses', SpouseOtherController::class);
Route::resource('beneficiaries', BeneficiaryController::class);
Route::get('/listall', 'App\Http\Controllers\BeneficiaryController@index2');
Route::get('/request', 'App\Http\Controllers\BeneficiaryController@dependents');
Route::get('/search', 'App\Http\BeneficiaryController@search')->name('beneficiaries.search');

// Route::get('search2', [UserController::class, 'search']);
// Route::get('autocomplete', [UserController::class, 'autocomplete'])->name('autocomplete');

Route::get('create', [BeneficiaryController::class, 'create']);
Route::get('autocomplete', [BeneficiaryController::class, 'autocomplete'])->name('autocomplete');



