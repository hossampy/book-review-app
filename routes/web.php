<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function ( ) {
    // Assuming 'latest' is a variable you want to pass to the view

    return view('welcome',);
});
Route::resource('books', BookController::class);
