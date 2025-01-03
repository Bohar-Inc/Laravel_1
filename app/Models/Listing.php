<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model

{

    use HasFactory;

    // Add this line to enable factories

    protected $fillable = ['title', 'tags', 'company', 'location'];
}
