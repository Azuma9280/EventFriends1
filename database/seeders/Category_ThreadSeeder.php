<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class Category_ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('category_thread')->truncate();
        DB::table('category_thread')->insert([
            'thread_id' => 1,
            'category_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('category_thread')->insert([
            'thread_id' => 2,
            'category_id' => 2,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('category_thread')->insert([
            'thread_id' => 3,
            'category_id' => 3,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
