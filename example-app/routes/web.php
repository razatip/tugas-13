<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cast;
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
    return view('table');
});

Route::get('/tableData', function (){
    return view('tableData');
});

Route::get('/castList', [cast::class,'show'] );

Route::post('/createCast', [cast::class,'store'] );

Route::get('/castList/create', function (){
    return view('menu.create');
});

Route::post('/createCast',[castController::class, 'store']);
Route::delete('/castList/{cast}',[castController::class, 'delete']);
Route::get('/castList/edit/{cast}',[castController::class, 'edit']);
Route::put('/castList/{cast}',[castController::class, 'update']);