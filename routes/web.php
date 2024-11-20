<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

//All listings
Route::get('/', [ListingController::class, 'index']);

//Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listing data
Route::post('/listings', [ListingController::class, 'store']);



//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
