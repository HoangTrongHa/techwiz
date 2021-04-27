<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
            'name' => 'seed',
            'email' => 'seed@gmail.com',
            'code' => '12',
            'phone_number'=>'0123456',
            ],
            [
                'name' => 'nghia',
                'email' => 'nghia@gmail.com',
                'code' => '14',
                'phone_number'=>'0123456',
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
