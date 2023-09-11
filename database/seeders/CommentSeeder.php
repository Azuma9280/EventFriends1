<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('comments')->truncate();
        DB::table('comments')->insert([
            'content' => 'アンパンマン作ったよ',
            'upload_image' => 'test',
            'thread_id' => 1,
            'user_id' => 1,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'content' => '雪だるま作ったよ',
            'upload_image' => 'test',
            'thread_id' => 1,
            'user_id' => 2,
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'content' => 'いい音楽聞けたわ',

            'thread_id' => 2,
            'user_id' => 2, 
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::table('comments')->insert([
            'content' => 'まさか2-3で負けるとは',
            'upload_image' => 'test',
            'thread_id' => 3,
            'user_id' => 1,       
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
