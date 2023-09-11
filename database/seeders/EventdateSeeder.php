<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EventdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('eventdates')->truncate();
        DB::table('eventdates')->insert([
            'start_date' => '2023-09-09',
            'end_date' => '2023-09-15',
            
            'thread_id' => 1,
        ]);
        DB::table('eventdates')->insert([
            'start_date' => '2023-09-11',
            'end_date' => '2023-09-11',
            
            'thread_id' => 2,
        ]);
        DB::table('eventdates')->insert([
            'start_date' => '2023-09-18',
            'end_date' => '2023-09-25',
            
            'thread_id' => 3,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
