<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [\App\Http\Controllers\PageController::class, 'home'])->name('home');

Route::middleware('auth')->group(function (){

    Route::resource('insertions', \App\Http\Controllers\InsertionsController::class);
});
