<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example;
use App\Http\Controllers\NameController;
use App\Http\Controllers\StudentController;

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

//Route::get('/', function () {
////    return view('welcome');
////    return 'Hello World';
////    return view('demo');
//});

Route::get('/bitm', [
    'uses' => 'App\Http\Controllers\Example@index',
    'as' => 'basis'
]);

Route::get('/arif','App\Http\Controllers\NameController@index')->name('arif');

Route::get('/full-name', [NameController::class, 'fullName']);

Route::get('/', [StudentController::class, 'home'])->name('home');
