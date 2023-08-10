<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('categories/{category}', [PageController::class, 'categoryShow'])->name('categoryShow');

Route::middleware('auth')->group(function (){

    Route::resource('insertions', \App\Http\Controllers\InsertionsController::class);
});
