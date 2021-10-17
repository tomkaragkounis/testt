<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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
/*
Route::get('/', function () {
    return view('welcome');
});

*/

//index
Route::get('/', function () {
    return view('undercon');
});

//submitmail

Route::post('/submitmail', [TestController::class, 'submitmail']);

//testpage
Route::get('/test', [TestController::class, 'test' ]);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

