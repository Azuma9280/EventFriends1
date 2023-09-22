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
            'date' => '2023-09-09',
            'thread_id' => 1,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-09-10',
            'thread_id' => 1,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-09-11',
            'thread_id' => 1,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-09-12',
            'thread_id' => 1,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-09-13',
            'thread_id' => 1,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-09-14',
            'thread_id' => 1,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-09-15',
            'thread_id' => 1,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-09-22',
            'thread_id' => 2,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-09-23',
            'thread_id' => 2,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-09-24',
            'thread_id' => 2,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-09-25',
            'thread_id' => 2,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-10-18',
            'thread_id' => 3,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-10-19',
            'thread_id' => 3,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-10-20',
            'thread_id' => 3,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-10-21',
            'thread_id' => 3,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-10-22',
            'thread_id' => 3,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-10-23',
            'thread_id' => 3,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-10-24',
            'thread_id' => 3,
        ]);
        DB::table('eventdates')->insert([
            'date' => '2023-10-25',
            'thread_id' => 3,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
