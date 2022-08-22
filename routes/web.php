<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
Route::get('/users', function () {
    return 'welcome users';
});
Route::get('/list', function () {
    $x =5;
    return $x;
});
Route::get('/declear variable',[UserController::class,'variable']);
Route::get('/test',[TestController::class,'test']);

Route::get('/list', function () {
    $x =5;

    $n =20;
    return $x.$n;

});
Route::get('/new', function () {
    $y =15;
    return $y;
});

