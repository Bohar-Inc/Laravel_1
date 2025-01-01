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


//        Listing::create([
//            'title' => 'Laravel Senior Developer',
//            'tags' => 'laravel, javascript',
//            'company' => 'Acme Corp.',
//            'location' => 'Boston, MA',
//            'email' => 'email@email.com',
//            'website' => 'https://www.acme.com',
//            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur deleniti?',
//        ]);
//        Listing::create(    [
//                'title' => 'Full-Stack Engineer',
//                'tags' => 'php, javascript, react',
//                'company' => 'Innovatech',
//                'location' => 'San Francisco, CA',
//                'email' => 'jobs@innovatech.com',
//                'website' => 'https://www.innovatech.com',
//                'description' => 'We are looking for a talented Full-Stack Engineer to join our team. You will be responsible for developing and maintaining both front-end and back-end applications using a variety of technologies.',
//        ]);

    }
}
