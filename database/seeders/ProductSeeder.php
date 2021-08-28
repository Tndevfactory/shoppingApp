<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('products')->insert(
                [

                    // Smartphones product -----------------------------

                    [
                    'name'=> 'Telephone-portable-nokia-c1 ',
                    'slug'=> 'telephone-portable-nokia-c1-plus-4g-double-sim-bleu',
                    'img_uri'=> '/img/smartphone/telephone-portable-nokia-c1-plus-4g-double-sim-bleu.jpg',
                    'price'=> 1256.90,
                    'inventory_id'=>1,
                    'category_id'=> 1,
                    'description' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                    'created_at' => Carbon::create(2021,5, 03),
                    'updated_at' => Carbon::create(2021,6, 03),

                    ],
                   
                    [
                    'name'=> 'Telephone-portable-condor ',
                    'slug'=> 'telephone-portable-condor-griffe-t8-plus-3g-double-sim-gold',
                    'img_uri'=> '/img/smartphone/telephone-portable-condor-griffe-t8-plus-3g-double-sim-gold.png',
                    'price'=> 256.90,
                    'inventory_id'=>1,
                    'category_id'=> 1,
                     'description' => 'Double SIM - Ecran 6.5"S Display Super AMOLED FHD + - Résolution: 2400 x 1080 - Processeur: Snapdragon 662 - Android 10.0 - RAM 6 Go - Mémoire 128 Go - Appareil Photo Quad capteur 16 MP, 8MP, 2MP+2MP ( Arriére) / 16 MP (Avant) - 4G - Wifi - Bluetooth - Batterie 4015 mAh - Recharge rapide: SuperVOOC 30 W SuperVOOC 2.0 - Couleur: Orange - Garantie 1 an',
                     'created_at' => Carbon::create(2021,3, 13),
                    'updated_at' => Carbon::create(2021,3, 23),

                    ],
                   
                    [
                    'name'=> 'Telephone-portable-itel ',
                    'slug'=> 'telephone-portable-itel-a48-double-sim-1go-16-go-vert',
                    'img_uri'=> '/img/smartphone/telephone-portable-itel-a48-double-sim-1go-16-go-vert.jpg',
                    'price'=> 356.90,
                    'inventory_id'=>1,
                    'category_id'=> 1,
                    'description' => 'Double SIM - 6.5" IPS LCD - Résolution: 1600 x 720 - Processeur: Qualcomm SM4250 Snapdragon 460 (11 nm) Octa-Core (4x1.8 GHz Kryo 240 & 4x1.6 GHz Kryo 240) - Android 10.0 - RAM 4 Go - Mémoire 64 Go - Appareil Photo Arriére: Triple 13.0 MP + 2.0 MP + 2.0 MP LED flash, HDR, panorama et Frontale: 8 MP f/2.0 - 4G - Wifi - Bluetooth - Batterie 4230 mAh - Capteur d\'empreinte Digitale - Couleur: Noir - ',
                     'created_at' => Carbon::create(2021,1, 01),
                    'updated_at' => Carbon::create(2021,1, 03),

                    ],
                   
                    [
                    'name'=> 'Tablette lenovo 7104i ',
                    'slug'=> 'tablette-lenovo-tab-e-tb-7104i-7-3g-noir-sim-orange-40-go',
                    'img_uri'=> '/img/smartphone/tablette-lenovo-tab-e-tb-7104i-7-3g-noir-sim-orange-40-go.jpg',
                    'price'=> 656.90,
                    'inventory_id'=>1,
                    'category_id'=> 1,
                    'description' => 'Double SIM - Ecran 6.52 HD+ - Résolution: 1600 × 720 - Processeur MEdiaTek Helio P35, Octa Core jusqu\'à 2.3 Ghz -  - Android 10.0 - RAM 3 Go - Mémoire 32 Go - Appareil Photo Arriére: Triple 13.0 MP + 2.0 MP + 2.0 MP Frontale 5.0 MP f/2.4 - 4G - Wifi - Bluetooth - Batterie 4100 mAh - Capteur d\'empreinte Digitale - Couleur: Blanc - Garantie 1 an ',
                     'created_at' => Carbon::create(2021,2, 03),
                    'updated_at' => Carbon::create(2021,3, 03),

                    ],
                    [
                    'name'=> 'Telephone-evertek-v8 ',
                    'slug'=> 'telephone-portable-evertek-v8-3g-double-sim-rouge-sim-offerte-40-go-',
                    'img_uri'=> '/img/smartphone/telephone-portable-evertek-v8-3g-double-sim-rouge-sim-offerte-40-go.png',
                    'price'=> 756.90,
                    'inventory_id'=>1,
                    'category_id'=> 1,
                    'description' => 'Double SIM - Ecran 6.22" IPS LCD+ Gorilla Glass 3 - Résolution 1520 x 720px - Processeur Mediatek MT6765 Octa-Core ( Cortex-A53 4x2,35 GHz et Cortex-A53 4x1,8 GHz) - RAM 3 Go - Mémoire 32 Go extensible jusqu\'à 256 Go - Android 9.0 Pie - ColorOS 6.1.2 - Appareils Photos: 12MP + 2 MP + 5 MP F/2.2 (Frontale) - Lecteur d\'empreintes digitales - 4G - Wifi - Bluetooth - Batterie 4230 mAh - Garantie 1 an - Couleur Noir',
                     'created_at' => Carbon::create(2021,3, 03),
                    'updated_at' => Carbon::create(2021,7, 03),

                    ],

                      // laptop products -----------------------------
                    
                    [
                    'name'=> 'pc-portable-asus-f571gt-i5 ',
                    'slug'=> 'pc-portable-asus-f571gt-i5-9e-gen-16-go-gtx',
                    'img_uri'=> '/img/laptop/pc-portable-asus-f571gt-i5-9e-gen-16-go-gtx-1650-4g.jpg',
                    'price'=> 2256.90,
                    'inventory_id'=>2,
                    'category_id'=> 2,
                    'description' => 'Ecran 15.6" IPS Full HD 120 Hz - Processeur AMD Ryzen 5 4600H (3.0 GHz up to 4.0 GHz, 8 Mo de mémoire cache) - Mémoire 16 Go - Disque 512 Go SSD M.2 2280 - Carte graphique NVIDIA GeForce GTX 1650 Ti, 4 Go de mémoire dédiée GDDR6 - Wi-Fi et Bluetooth 5.0 - Clavier Retroéclairé - Couleur Bleu - Garantie 2 ans + Souris Gaming Lenovo M100 Offerte',
                    'created_at' => Carbon::create(2021,5, 03),
                    'updated_at' => Carbon::create(2021,6, 03),

                    ],
                   
                    [
                    'name'=> 'pc-portable-asus-tuf505dt',
                    'slug'=> 'pc-portable-asus-tuf505dt-amd-ryzen-5-8-go-souris-asus-tuf',
                    'img_uri'=> '/img/laptop/pc-portable-asus-tuf505dt-amd-ryzen-5-8-go-souris-asus-tuf-gaming-m5.jpg',
                    'price'=> 1256.90,
                    'inventory_id'=>2,
                    'category_id'=> 2,
                     'description' => 'Ecran 15.6" IPS Full HD 120 Hz - Processeur AMD Ryzen 5 4600H (3.0 GHz up to 4.0 GHz, 8 Mo de mémoire cache) - Mémoire 16 Go - Disque 512 Go SSD M.2 2280 - Carte graphique NVIDIA GeForce GTX 1650 Ti, 4 Go de mémoire dédiée GDDR6 - Wi-Fi et Bluetooth 5.0 - Clavier Retroéclairé - Couleur Bleu - Garantie 2 ans + Souris Gaming Lenovo M100 Offerte',
                     'created_at' => Carbon::create(2021,3, 13),
                    'updated_at' => Carbon::create(2021,3, 23),

                    ],
                   
                    [
                    'name'=> 'pc-portable-dell-g3-3500 ',
                    'slug'=> 'pc-portable-dell-g3-3500-i5-10e-gen-8-go-noir',
                    'img_uri'=> '/img/laptop/pc-portable-dell-g3-3500-i5-10e-gen-8-go-noir.jpg',
                    'price'=> 1356.90,
                    'inventory_id'=>2,
                    'category_id'=> 2,
                    'description' => 'Ecran 15.6" IPS Full HD 120 Hz - Processeur AMD Ryzen 5 4600H (3.0 GHz up to 4.0 GHz, 8 Mo de mémoire cache) - Mémoire 16 Go - Disque 512 Go SSD M.2 2280 - Carte graphique NVIDIA GeForce GTX 1650 Ti, 4 Go de mémoire dédiée GDDR6 - Wi-Fi et Bluetooth 5.0 - Clavier Retroéclairé - Couleur Bleu - Garantie 2 ans + Souris Gaming Lenovo M100 Offerte',
                     'created_at' => Carbon::create(2021,1, 01),
                    'updated_at' => Carbon::create(2021,1, 03),

                    ],
                   
                    [
                    'name'=> 'pc-portable-hp-pavilion-gaming-15 ',
                    'slug'=> 'pc-portable-hp-pavilion-gaming-15-ec1017nk-ryzen-5',
                    'img_uri'=> '/img/laptop/pc-portable-hp-pavilion-gaming-15-ec1017nk-ryzen-5-4600h-8-go-gtx-1650-4g.jpg',
                    'price'=> 1656.90,
                    'inventory_id'=>2,
                    'category_id'=> 2,
                    'description' => 'Ecran 15.6" IPS Full HD 120 Hz - Processeur AMD Ryzen 5 4600H (3.0 GHz up to 4.0 GHz, 8 Mo de mémoire cache) - Mémoire 16 Go - Disque 512 Go SSD M.2 2280 - Carte graphique NVIDIA GeForce GTX 1650 Ti, 4 Go de mémoire dédiée GDDR6 - Wi-Fi et Bluetooth 5.0 - Clavier Retroéclairé - Couleur Bleu - Garantie 2 ans + Souris Gaming Lenovo M100 Offerte',
                     'created_at' => Carbon::create(2021,2, 03),
                    'updated_at' => Carbon::create(2021,3, 03),

                    ],
                    [
                    'name'=> 'pc-portable-lenovo-ideapad-gaming-3',
                    'slug'=> 'pc-portable-lenovo-ideapad-gaming-3-15imh05-i5-10e-gen-8-go-souris-gaming-lenovo',
                    'img_uri'=> '/img/laptop/pc-portable-lenovo-ideapad-gaming-3-15imh05-i5-10e-gen-8-go-souris-gaming-lenovo-m100-offerte.jpg',
                    'price'=> 1756.90,
                    'inventory_id'=>2,
                    'category_id'=> 2,
                    'description' => 'Ecran 15.6" IPS Full HD 120 Hz - Processeur AMD Ryzen 5 4600H (3.0 GHz up to 4.0 GHz, 8 Mo de mémoire cache) - Mémoire 16 Go - Disque 512 Go SSD M.2 2280 - Carte graphique NVIDIA GeForce GTX 1650 Ti, 4 Go de mémoire dédiée GDDR6 - Wi-Fi et Bluetooth 5.0 - Clavier Retroéclairé - Couleur Bleu - Garantie 2 ans + Souris Gaming Lenovo M100 Offerte',

                     'created_at' => Carbon::create(2021,3, 03),
                    'updated_at' => Carbon::create(2021,7, 03),

                    ],
        ]);
 
    }
}
