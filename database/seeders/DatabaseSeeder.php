<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Listing; // Import Listing model
use App\Models\User;    // Import User model

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Listing::factory(6)->create();

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, php, javascript',
            'company' => 'Acme Corp.',
            'location' => 'Boston, MA',
            'email' => 'example@acmecorp.com',
            'website' => 'https://acmecorp.com',
            'description' => 'We are looking for an experienced Laravel Senior Developer to join our team.', // Add this line
        ]);
    }
}
