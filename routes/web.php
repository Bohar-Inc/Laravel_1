<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing; // Ensure Listing is the correct model

// All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all(), // Fetching all listings
    ]);
});

// Single Listing
Route::get('/listings/{id}', function ($id) {
    $listing = Listing::find($id); // Use find() method to check for existence first
    if (!$listing) {
        abort(404, 'Listing not found'); // If not found, return 404 error
    }
    return view('listing', [
        'listing' => $listing,
    ]);
});
