<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $genres =[
            'Romance',
            'Young Adult',
            'Crime',
            'Fantasy',
            'Sci-Fi',
            'Biography',
            'Fairytale',
            'For kids'
        ];

        foreach ($genres as $genre){
            $new_genre = new Genre;
            $new_genre =$
        }

        
        // \App\Models\User::factory(10)->create();
    }
}
