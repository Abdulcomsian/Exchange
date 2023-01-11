<?php

use App\Http\Controllers\AuthController;
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


Route::get('login/{provider}', [AuthController::class,'redirect']);
Route::get('login/{provider}/callback',[AuthController::class,'callback']);
Route::get('logout',[AuthController::class,'logout']);


Route::get('/', function () {
    return view('FrontEnd.index');
});
//industory url
Route::get('/industry',function(){
    return view('FrontEnd.individual-category');
});

// Browse-all url 
Route::get('/browse-all', function(){
    return view('FrontEnd.all-business');
});
// single Bussiness url 
Route::get('/single-business', function(){
    return view('FrontEnd.single-business');
});
// create store URL 
Route::get('/sell-your-business', function(){
    return view('FrontEnd.createStore');
});
Route::get('/dashboard', function(){
    return view('FrontEnd.storeListing');
});