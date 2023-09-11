<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Datetime;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('threads')->truncate();
        DB::table('threads')->insert([
           'title' => '雪まつり',
           'content' => '面白いからみんな見てね',
           'delete_key'=> '12345',
           'created_at' => new Datetime(),
           'updated_at' => new Datetime(),
           'view' => 5,
           'upload_image' => 'test',
           'upload_url' => 'adfadsf',
           'user_id' => 1,
        ]);   
        DB::table('threads')->insert([
           'title' => 'サマソニ2023',
           'content' => '早く聞きたい！',
           'delete_key'=> '34567',
           'created_at' => new Datetime(),
           'updated_at' => new Datetime(),
           'view' => 10,
           'upload_image' => 'test',
           'upload_url' => 'addsfadsf',
           'user_id' => 1,
        ]);
        DB::table('threads')->insert([
           'title' => 'ゲーム大会',
           'content' => '見逃せない一戦',
           'delete_key'=> '84742',
           'created_at' => new Datetime(),
           'updated_at' => new Datetime(),
           'view' => 20,
           'upload_image' => 'test',
           'upload_url' => 'adfadsf',
           'user_id' => 2,
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
