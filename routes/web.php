<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('contact','contactus');
Route::view('about','aboutus');

Route::prefix('project',function(){
    Route::get('list',[ProjectController::class,'index']);
    Route::get('create',[ProjectController::class,'create']);
    Route::post('store',[ProjectController::class,'store']);
    Route::get('edit',[ProjectController::class,'edit']);
    Route::patch('update',[ProjectController::class,'create']);
    Route::delete('delete',[ProjectController::class,'destroy']);
});

Route::prefix('blog',function(){
    Route::get('list',[ProjectController::class,'index']);
    Route::get('create',[ProjectController::class,'create']);
    Route::post('store',[ProjectController::class,'store']);
    Route::get('edit',[ProjectController::class,'edit']);
    Route::patch('update',[ProjectController::class,'create']);
    Route::delete('delete',[ProjectController::class,'destroy']);
});
