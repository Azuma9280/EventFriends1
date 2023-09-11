<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
           ThreadSeeder::class, 
           UserSeeder::class,
           CategorySeeder::class,
           EventdateSeeder::class,
           CommentSeeder::class,
           Category_ThreadSeeder::class,
        ]);
    }
}
