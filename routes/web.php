<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings.index',[
            'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function ($id) {
    return view('listings.show',[
        'listing' => Listing::find($id)
        ]);
} );


