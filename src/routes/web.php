<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeightController;
use App\Http\Controllers\WeightLogController;


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

Route::get('/register/step1',function(){
    return view('auth.register');
})->name('register');
//Route::post('/register',[WeightController::class,'index']);

Route::post('/register/step2',[WeightController::class,'create']);
Route::post('/weight_logs',[WeightController::class,'store']);
Route::get('/weight_logs/create',[WeightLogController::class,'create']);
Route::post('/weight_logs',[WeightLogController::class,'store']);

Route::get('/weight_logs/goal_setting',[WeightLogController::class,'goal_weight']);
//Route::post('/weight_logs',[WeightLogController::class,'goal_weight_update']);

Route::post('/logout',[WeightController::class,'logout'])->middleware('auth');

//Route::middleware('auth')->group(function(){
    //Route::get('/weight_log/create',function(){
    //    return view('/weight_logs');
//});
//});
//Route::middleware('auth')->group(function(){
   // Route::get('/weight_logs',[WeightLogController::class,'admin']);
//});