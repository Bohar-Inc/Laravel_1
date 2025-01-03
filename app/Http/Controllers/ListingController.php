<?php

use App\Models\Listing; // Assuming your model is named Listing

class ListingsController extends Controller
{
    public function index()
    {
        $heading = 'Latest Listings'; // Define the heading
        $listings = Listing::all(); // Fetch all listings from the database

        return view('listings', compact('heading', 'listings'));
    }

    // ... other controller methods ...
}
