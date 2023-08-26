<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        // Create user
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@mail.com'
        ]);

        // Seed date for Listing model
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston. MA',
        //     'email' => 'email1@email.com',
        //     'website' => 'https://ww.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
        //     Velit totam a officiis cumque et fugiat ducimus laboriosam aliquam, alias
        //     enim! Aut temporibus soluta pariatur eaque rerum illo deserunt distinctio
        //     voluptatem.'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@email.com',
        //     'website' => 'https://ww.starkIndustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
        //     Velit totam a officiis cumque et fugiat ducimus laboriosam aliquam, alias
        //     enim! Aut temporibus soluta pariatur eaque rerum illo deserunt distinctio
        //     voluptatem.'
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
