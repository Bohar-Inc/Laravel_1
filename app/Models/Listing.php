<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory; // Add this line to enable factories

    protected $fillable = ['title', 'tags', 'company', 'location'];
}




//namespace App\Models;
//
//class Listing
//{
//    public static function all()
//    {
//        return [
//            [
//                'id' => 1,
//                'title' => 'Listing One',
//                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur deleniti'
//            ],
//            [
//                'id' => 2,
//                'title' => 'Listing Two',
//                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur deleniti'
//            ]
//        ];
//    }
//
//    public static function find($id)
//    {
//        $listings = self::all();
//
//        foreach ($listings as $listing) {
//            if ($listing['id'] == $id) {
//                return $listing;
//            }
//        }
//    }
//}
