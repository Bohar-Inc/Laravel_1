<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings',[
        'heading'=>'Latest Listings',
        'listings'=>[
            [
            'id'=>1,
            'title'=>'Listing one',
            'description'=>'Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.'
            ],
            [
                'id'=>2,
                'title'=>'Listing two',
                'description'=>'Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.'
            ]
        ]
    ]);
});
