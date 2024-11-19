<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('listings',[
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

//Single listing
Route::get('/listings/{id}', function ($id) {
    return view('listing',[
        'listing' => Listing::find($id)
    ]);
});
