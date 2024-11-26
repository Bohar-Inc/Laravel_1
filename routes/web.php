<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('singlepage', 'singlepage');

Route::post('savedata',[MyController::class, 'savedata']);
