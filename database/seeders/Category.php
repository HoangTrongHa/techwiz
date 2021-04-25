<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('categories')->insert([
           [
               'name' => 'Sweaty Bodyweight Cardio Butt and Thigh Workout',
                'rules' => '1'
           ],
           [
            'name' => '20 Minute Butt and Thigh Workout - Glute Activation Workout',
             'rules' => '1'
            ],
            [
                'name' => 'Upper Body Workout to Build Strength for Push Ups + Tips on How to Do More Push Ups',
                'rules' => '1'
            ]
       ]);
    }
}