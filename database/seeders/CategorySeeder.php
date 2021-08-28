<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('categories')->insert(
               [

            [
            'name'=> 'Smartphone and tablettes',
            'slug'=> 'Smartphone-and-tablettes',
            'created_at' => Carbon::create(2021,5, 03),
             'updated_at' => Carbon::create(2021,6, 03),
            ],

            [
            'name'=> 'Pc and laptop',
            'slug'=> 'Pc-and-laptop',
            'created_at' => Carbon::create(2021,5, 03),
             'updated_at' => Carbon::create(2021,8, 03),
            ],
            
        ]);
    }
}
