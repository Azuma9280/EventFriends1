<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            'name' => 'お祭り',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('categories')->insert([
            'name' => 'コンサート',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('categories')->insert([
            'name' => '大会',
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
    }
}
