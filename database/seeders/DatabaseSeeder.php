<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur deleniti.'
        ]);
        Listing::create([
            'title' => 'Software Engineer',
            'tags' => 'python, django, aws',
            'company' => 'Tech Solutions',
            'location' => 'New York, NY',
            'email' => 'careers@techsolutions.com',
            'website' => 'https://www.techsolutions.co',
            'description' => 'We are seeking a skilled Software Engineer to join our growing team. You will be involved in the design, development, and deployment of innovative software solutions.',
        ]);
    }
}
