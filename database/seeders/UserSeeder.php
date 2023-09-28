<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'one',
            'email' => 'one@gmail.com',
            'password' => Hash::make('one11111'),
            'last_login_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'two',
            'email' => 'two@gmail.com',
            'password' => Hash::make('two22222'),
            'last_login_at' => new DateTime(),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        // DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
