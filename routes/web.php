<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoHighLevelController;

//Route::get('getContact', [GoHighLevelController::class, 'index'])->name('getContact');

Route::get('/', function () {
    return view('dashboard');  // This is the view you'd like to return
})->name('index');
