<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing; // Assuming Listing is your model

// All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all(),
    ]);
});

// Single Listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::findOrFail($id),
    ]);
});


