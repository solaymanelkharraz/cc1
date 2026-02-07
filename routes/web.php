<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EvenementController; // Don't forget this import!

// This single line creates all 7 routes (index, show, destroy, etc.) for your exam 
Route::resource('evenements', EvenementController::class);

// Optional: Redirect the home page to the events list
Route::get('/', function () {
    return redirect()->route('evenements.index');
});