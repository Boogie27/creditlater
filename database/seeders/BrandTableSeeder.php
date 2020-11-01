<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date("Y-m-d H:s:i", time());

        DB::table('brands')->insert(array(
        array(
            'id' => 1,
            'brand_name' => 'levis',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 2,
            'brand_name' => 'addidass',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 3,
            'brand_name' => 'shantel',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 4,
            'brand_name' => 'gucci',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 5,
            'brand_name' => 'vassarette',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 6,
            'brand_name' => 'Versace ',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 7,
            'brand_name' => 'chinos',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 8,
            'brand_name' => 'levis',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 9,
            'brand_name' => 'Microsoft',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 10,
            'brand_name' => 'Toyota',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 11,
            'brand_name' => 'Samsung',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 12,
            'brand_name' => 'McDonald',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 13,
            'brand_name' => 'Disney ',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 14,
            'brand_name' => 'Oracle',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 15,
            'brand_name' => 'Cisco',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 16,
            'brand_name' => 'Audi',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 17,
            'brand_name' => 'Nescafe',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 18,
            'brand_name' => 'eBay ',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 19,
            'brand_name' => 'Nissan',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        ),
        array(
            'id' => 20,
            'brand_name' => 'Allianz',
            'products_date_added' => $date,
            'products_last_modified' => $date,
            'products_date_available' => $date,
            'is_feature' => 1,
        )
        )
        );

    }
}
