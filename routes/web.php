<?php

use App\Http\Controllers\ConponentTestController;
use App\Http\Controllers\LifeCycleTestController;
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
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

Route::get('/component-test1', [ConponentTestController::class, 'showConponent1']);

Route::get('/component-test2', [ConponentTestController::class, 'showConponent2']);


Route::get('/servicecontainertest', [LifeCycleTestController::class, 'showServiceContainerTest']);

Route::get('/serviceprovidertest', [LifeCycleTestController::class, 'showServiceProviderTest']);


require __DIR__.'/auth.php';
