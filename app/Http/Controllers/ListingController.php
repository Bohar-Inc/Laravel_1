<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        return view('listing', [
            'listings' => Listing::all()
        ]);
    }

    public function show(Listing $listing)
    {
        return view('listing', [
            'listing' => $listing
        ]);
    }
}




// All Listings
Route::get('/', [ListingController::class, 'index']);

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

