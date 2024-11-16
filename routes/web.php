<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/', function () {
    return view('listings',[
        'heading'=>'Latest things',
        'listings'=>listing::all()
    ]);
});

//Single listing
Route::get('/listings/{listing}', function (Listing $listing) {
        return view('listing', [
            'listing' => $listing
        ]);
});
