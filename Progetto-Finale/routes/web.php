<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('categories/{category}', [PageController::class, 'categoryShow'])->name('categoryShow');

Route::middleware('auth')->group(function (){
    Route::resource('insertions', \App\Http\Controllers\InsertionsController::class);
});

Route::get('revisor/home', [RevisorController::class, 'index'])->name('revisor.index');

Route::patch('accept/insertion/{insertion}', [RevisorController::class, 'acceptInsertion'])->name('revisor.accept_insertion');

Route::patch('reject/insertion/{insertion}',[RevisorController::class, 'rejectInsertion'])->name('revisor.reject_insertion');
