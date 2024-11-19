<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing
{
    public static function all(){
        return[
            [
                'id' =>1,
                'title' => 'Listing one',
                'description' => 'Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.',
            ],
            [
                'id' =>2,
                'title' => 'Listing two',
                'description' => 'Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.',
            ]
        ];
    }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}
