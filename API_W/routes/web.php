<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/home', function () {
    return view('welcome');
});