<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/',[ListingController::class,'index'] );

//Show create form
Route::get('/listings/create',[ListingController::class,'create'] );
//Single listing
Route::get('/listings/{listing}',[ListingController::class,'show'] );

