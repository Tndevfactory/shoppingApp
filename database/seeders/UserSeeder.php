<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
           DB::table('users')->insert(
               [

            [
            'name'=> 'Chiheb Nasr',
            'email'=> 'ch@ch.com',
            'password'=> bcrypt('456789'),
            'is_admin'=> 1,
            'img_uri'=> '/img/users/chiheb.jpg',
            'created_at' => Carbon::create(2021,5, 03),
            'updated_at' => Carbon::create(2021,6, 03),
            ],
            [
            'name'=> 'Abdelhamid Fendri',
            'email'=> 'ah@ch.com',
            'password'=> bcrypt('456789'),
            'is_admin'=> 0,
            'img_uri'=> '/img/users/abdelhamid.jpg',
            'created_at' => Carbon::create(2021,4, 03),
            'updated_at' => Carbon::create(2021,6, 13),
            ],
            [
            'name'=> 'Siwar Ben Hamouda',
            'email'=> 'sh@ch.com',
            'password'=> bcrypt('456789'),
            'is_admin'=> 0,
            'img_uri'=> '/img/users/siwar.png',
            'created_at' => Carbon::create(2021,3, 03),
            'updated_at' => Carbon::create(2021,4, 03),
            ],
            [
            'name'=> 'tndev8',
            'email'=> 'tndev8@gmail.com',
            'password'=> bcrypt('456789'),
            'is_admin'=> 0,
            'img_uri'=> '/img/empty_photo/empty-user.jpg',
            'created_at' => Carbon::create(2021,3, 03),
            'updated_at' => Carbon::create(2021,4, 03),
            ],


            
        ]);
    }
}
