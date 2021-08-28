<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('inventories')->insert(
                [

                    // gestion stock  -----------------------------

                    [
                    'modele'=> 'gsm-nokia-c1-series ',
                    'size'=> '5.3"',
                    'color'=> 'blue',
                    'quantity'=>8,
                    'promotion'=> 0.15,

                    ],
                    [
                    'modele'=> 'Asus-portable-c871-series ',
                    'size'=> '15.3"',
                    'color'=> 'black',
                    'quantity'=>8,
                    'promotion'=> 0.10,

                    ],
                ]);
    }
}
